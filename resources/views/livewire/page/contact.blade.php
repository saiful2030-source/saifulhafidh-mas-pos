<div>
    <section class="bg-gray-100 py-12 md:py-24">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl font-bold text-gray-900 md:text-5xl">Get in Touch</h1>
            <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">Have any questions? We'd love to hear from you. Fill out the form below or contact us directly.</p>
        </div>
    </section>
    <section class="bg-white py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto bg-gray-50 shadow-md rounded-lg p-8">
                <h2 class="text-2xl font-bold text-gray-900 text-center mb-8">Send us a message</h2>
                <form action="" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Name -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" name="name" id="name" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required>
                        </div>
    
                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" name="email" id="email" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required>
                        </div>
                    </div>
    
                    <!-- Subject -->
                    <div class="mt-6">
                        <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                        <input type="text" name="subject" id="subject" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required>
                    </div>
    
                    <!-- Message -->
                    <div class="mt-6">
                        <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                        <textarea name="message" id="message" rows="6" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required></textarea>
                    </div>
    
                    <!-- Submit Button -->
                    <div class="mt-8 text-center">
                        <button type="submit" class="bg-indigo-600 text-white px-8 py-3 rounded-full shadow hover:bg-indigo-700 focus:outline-none">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
</div>
