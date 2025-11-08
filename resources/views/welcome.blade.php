<x-user-layout title="A CASH | Expense & Deposit SaaS">
    <div class="min-h-screen bg-[#06090f] text-white font-sans">

        <!-- Hero Section -->
        <section class="relative py-28 text-center px-6 md:px-16 overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-[#04d2f0]/90 via-[#0b0f1a] to-[#05070b] opacity-90">
            </div>
            <div class="relative z-10">
                <h1 class="text-5xl md:text-6xl font-extrabold mb-6 leading-tight">
                    Simplify Your <span class="brandColor drop-shadow-[0_0_10px_#04d2f0]">Expense</span> &
                    <span class="brandColor drop-shadow-[0_0_10px_#04d2f0]">Deposit</span> Management
                </h1>
                <p class="max-w-2xl mx-auto text-lg text-gray-100">
                    A CASH is a cloud-based SaaS that lets every user or company manage their own financial
                    records in a secure, independent workspace — anytime, anywhere.
                </p>
                <div class="mt-10 flex justify-center gap-4">
                    <a href="#"
                        class="bg-white text-[#0b0f1a] font-semibold px-8 py-3 rounded-full hover:bg-opacity-90 shadow-lg transition">
                       Register Now
                    </a>
                    <a href="{{ route('login') }}"
                        class="border border-white/70 px-8 py-3 rounded-full hover:bg-white hover:text-[#0b0f1a] transition">
                        Login
                    </a>
                </div>
            </div>
        </section>

        <!-- About / SaaS Value Section -->
        <section class="py-20 px-6 md:px-20 bg-[#0b0f1a] text-center">
            <h2 class="text-3xl font-bold mb-10">
                What Makes <span class="brandColor">A CASH</span> Different
            </h2>
            <div class="max-w-5xl mx-auto grid md:grid-cols-3 gap-8 text-left">
                <div class="bg-[#101726] p-8 rounded-2xl border border-gray-800 hover:border-brandColor transition">
                    <h3 class="text-xl font-semibold mb-3 brandColor">Multi-Tenant System</h3>
                    <p class="text-gray-300">
                        Every user or organization operates in their own private workspace — ensuring
                        complete data isolation and security.
                    </p>
                </div>

                <div class="bg-[#101726] p-8 rounded-2xl border border-gray-800 hover:border-brandColor transition">
                    <h3 class="text-xl font-semibold mb-3 brandColor">Real-Time Insights</h3>
                    <p class="text-gray-300">
                        Get instant overviews of total deposits, expenses, and net cash flow with dynamic
                        analytics and easy reporting tools.
                    </p>
                </div>

                <div class="bg-[#101726] p-8 rounded-2xl border border-gray-800 hover:border-brandColor transition">
                    <h3 class="text-xl font-semibold mb-3 brandColor">Secure Cloud Access</h3>
                    <p class="text-gray-300">
                        Hosted securely with encrypted transactions and role-based permissions — accessible
                        from any device, anytime.
                    </p>
                </div>
            </div>
        </section>

        <!-- How It Works -->
        <section class="py-20 px-6 md:px-20 bg-gradient-to-b from-[#0b0f1a] to-[#06090f] text-center">
            <h2 class="text-3xl font-bold mb-10">
                How <span class="brandColor">A CASH</span> Works
            </h2>
            <div class="max-w-5xl mx-auto grid md:grid-cols-3 gap-8 text-left">
                <div class="p-8 bg-[#101726] rounded-2xl border border-gray-800 hover:border-brandColor transition">
                    <h3 class="text-xl font-semibold mb-3 brandColor">1. Create Your Account</h3>
                    <p class="text-gray-300">
                        Sign up and get your personal or business workspace instantly — no setup required.
                    </p>
                </div>

                <div class="p-8 bg-[#101726] rounded-2xl border border-gray-800 hover:border-brandColor transition">
                    <h3 class="text-xl font-semibold mb-3 brandColor">2. Add Transactions</h3>
                    <p class="text-gray-300">
                        Log your daily expenses and deposits easily with automated category tagging.
                    </p>
                </div>

                <div class="p-8 bg-[#101726] rounded-2xl border border-gray-800 hover:border-brandColor transition">
                    <h3 class="text-xl font-semibold mb-3 brandColor">3. Analyze & Optimize</h3>
                    <p class="text-gray-300">
                        Get smart insights to understand your spending patterns and manage savings better.
                    </p>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="brandBg py-20 text-center relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-r from-[#04d2f0]/10 to-transparent animate-pulse"></div>
            <div class="relative z-10">
                <h2 class="text-4xl font-bold mb-4">
                    Your Finances. Your Control. <span class="brandColor">A CASH</span>
                </h2>
                <p class="max-w-xl mx-auto text-gray-100 mb-8">
                    Join hundreds of users managing their expenses & deposits smarter — securely, from one place.
                </p>
                <a href="#"
                    class="bg-white text-[#0b0f1a] font-semibold px-8 py-4 rounded-full hover:bg-opacity-90 shadow-lg transition">
                    Get Started Now
                </a>
            </div>
        </section>

        <!-- Footer -->
        <footer class="text-center py-8 text-sm text-gray-500 border-t border-gray-800">
            © 2025 <span class="brandColor font-semibold">A CASH</span>. Powered by Sardar IT Skillshare.
        </footer>

    </div>
</x-user-layout>
