<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use App\Models\User;
use App\Models\UserDetail;
use Carbon\Carbon;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords\Tab;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class ManageUsers extends ManageRecords
{
    protected static string $resource = UserResource::class;

    protected static ?string $title = 'User List';

    public function getTabs(): array
    {
        $currentTime = Carbon::now();
        $weekAgo = $currentTime->clone()->subWeek();
        $monthAgo = $currentTime->clone()->subMonth();
        $yearAgo = $currentTime->clone()->subYear();

        $thisWeekCount = User::whereBetween('created_at', [$weekAgo, $currentTime])
            ->where('id', '!=', auth()->id())
            ->count();
        $thisMonthCount = User::whereBetween('created_at', [$monthAgo, $currentTime])
            ->where('id', '!=', auth()->id())
            ->count();
        $thisYearCount = User::whereBetween('created_at', [$yearAgo, $currentTime])
            ->where('id', '!=', auth()->id())
            ->count();

        return [
            'All' => Tab::make(),
            'This Week' => Tab::make()
                ->modifyQueryUsing(fn(Builder $query) => $query->whereBetween('created_at', [$weekAgo, $currentTime]))
                ->badge($thisWeekCount),
            'This Month' => Tab::make()
                ->modifyQueryUsing(fn(Builder $query) => $query->whereBetween('created_at', [$monthAgo, $currentTime]))
                ->badge($thisMonthCount),
            'This Year' => Tab::make()
                ->modifyQueryUsing(fn(Builder $query) => $query->whereBetween('created_at', [$yearAgo, $currentTime]))
                ->badge($thisYearCount),
        ];
    }
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->disableCreateAnother()
                ->icon('heroicon-o-plus')
                ->label('Create User')
                ->mutateFormDataUsing(function (array $data): array {
                    $userDetails = [
                        'first_name' => $data['userDetails']['first_name'],
                        'last_name' => $data['userDetails']['last_name'],
                        'phone_number' => $data['userDetails']['phone_number'],
                        'date_of_birth' => $data['userDetails']['date_of_birth'],
                        'avatar' => $data['userDetails']['avatar'],
                        'gender' => $data['userDetails']['gender'],
                        'address' => $data['userDetails']['address'],
                    ];

                    $data['name'] = $userDetails['first_name'] . ' ' . $userDetails['last_name'];
                    return $data;
                })
                ->after(function ($record, array $data): void {
                    // After the user is created, insert the related user details
                    $userDetails = [
                        'first_name' => $data['userDetails']['first_name'],
                        'last_name' => $data['userDetails']['last_name'],
                        'phone_number' => $data['userDetails']['phone_number'],
                        'date_of_birth' => $data['userDetails']['date_of_birth'],
                        'avatar' => $data['userDetails']['avatar'],
                        'gender' => $data['userDetails']['gender'],
                        'address' => $data['userDetails']['address'],
                        'user_id' => $record->id, // Set the user_id after User is created
                    ];

                    UserDetail::create($userDetails);
                }),
        ];
    }
}
