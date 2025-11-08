<x-user-layout title="Register | A CASH">
    <div
        class="min-h-screen flex items-center justify-center bg-gradient-to-br from-[#081018] via-[#0b1624] to-[#0f1d2e] px-6">

        <div
            class="w-full max-w-md bg-[#121e2f]/90 backdrop-blur-md border border-[#22324a] rounded-2xl shadow-[0_0_25px_rgba(4,210,240,0.12)] p-10">
            <!-- Logo / Title -->
            <div class="text-center mb-10">
                <h1 class="text-4xl font-extrabold tracking-wide text-white">
                    <span class="brandColor drop-shadow-[0_0_10px_#04d2f0]">A CASH</span>
                </h1>
                <p class="text-gray-300 text-sm mt-2">Create your account and start managing smarter</p>
            </div>

            <!-- Form -->
            <form method="POST" class="space-y-7">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-200 mb-2">Full Name</label>
                    <input type="text" id="name" name="name" required
                        class="w-full px-4 py-3.5 rounded-xl bg-[#17263a] border border-[#2a3e5c] text-gray-100 placeholder-gray-400 focus:outline-none focus:border-brandColor focus:ring-1 focus:ring-brandColor transition"
                        placeholder="John Doe" />
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-200 mb-2">Email Address</label>
                    <input type="email" id="email" name="email" required
                        class="w-full px-4 py-3.5 rounded-xl bg-[#17263a] border border-[#2a3e5c] text-gray-100 placeholder-gray-400 focus:outline-none focus:border-brandColor focus:ring-1 focus:ring-brandColor transition"
                        placeholder="you@example.com" />
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-200 mb-2">Password</label>
                    <input type="password" id="password" name="password" required
                        class="w-full px-4 py-3.5 rounded-xl bg-[#17263a] border border-[#2a3e5c] text-gray-100 placeholder-gray-400 focus:outline-none focus:border-brandColor focus:ring-1 focus:ring-brandColor transition"
                        placeholder="••••••••" />
                </div>

                <div>
                    <label for="confirm" class="block text-sm font-medium text-gray-200 mb-2">Confirm Password</label>
                    <input type="password" id="confirm" name="confirm" required
                        class="w-full px-4 py-3.5 rounded-xl bg-[#17263a] border border-[#2a3e5c] text-gray-100 placeholder-gray-400 focus:outline-none focus:border-brandColor focus:ring-1 focus:ring-brandColor transition"
                        placeholder="••••••••" />
                </div>

                <div class="flex items-center gap-2 text-sm text-gray-300">
                    <input type="checkbox" id="terms" class="accent-brandColor rounded-sm" required />
                    <label for="terms">I agree to the <a href="#" class="text-brandColor hover:underline">Terms
                            & Conditions</a></label>
                </div>

                <button type="submit"
                    class="w-full bg-gray-300 text-[#04121b] font-semibold py-3.5 rounded-xl shadow-[0_0_20px_rgba(4,210,240,0.5)] hover:shadow-[0_0_30px_rgba(4,210,240,0.7)] hover:scale-[1.02] transition">
                    Create Account
                </button>
            </form>

            <!-- Login Redirect -->
            <p class="text-center text-sm text-gray-300 mt-10">
                Already have an account?
                <a href="{{ route('login') }}" class="text-brandColor hover:underline font-medium">Login here</a>
            </p>
        </div>
    </div>
</x-user-layout>
