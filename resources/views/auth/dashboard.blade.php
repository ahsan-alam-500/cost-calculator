<x-user-layout title="Dashboard | A CASH">
    <div class="min-h-screen bg-gradient-to-br from-[#081018] via-[#0b1624] to-[#0f1d2e] text-gray-100 px-6 py-10">
        <div class="max-w-6xl mx-auto">

            <!-- Top Bar -->
            <div class="flex items-center justify-between mb-10">
                <div>
                    <h1 class="text-2xl font-bold brandColor">Welcome, {{ auth()->user()->name ?? 'User' }} 👋</h1>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="bg-brandColor text-[#04121b] font-semibold px-5 py-2 rounded-lg hover:scale-[1.05] transition shadow-[0_0_10px_rgba(4,210,240,0.4)] hover:shadow-[0_0_20px_rgba(4,210,240,0.6)]">
                        Logout
                    </button>
                </form>
            </div>

            <!-- Header -->
            <div class="text-center mb-10">
                <h1 class="text-4xl font-bold mb-2">
                    <span class="brandColor drop-shadow-[0_0_10px_#04d2f0]">A CASH</span> Dashboard
                </h1>
                <p class="text-gray-400">Manage your daily expenses and deposits in one place.</p>
            </div>

            <!-- Forms Section -->
            <div class="grid md:grid-cols-2 gap-8 mb-12">

                <!-- Expense Form -->
                <div
                    class="bg-[#121e2f]/90 p-8 rounded-2xl border border-[#22324a] shadow-[0_0_25px_rgba(4,210,240,0.08)]">
                    <h2 class="text-xl font-semibold mb-6 brandColor">Add Expense</h2>
                    <form method="POST" action="{{ route('expense.store') }}" class="space-y-5">
                        @csrf
                        <div>
                            <label class="block text-sm mb-2">Expense Title</label>
                            <input type="text" name="note" placeholder="e.g. Office Rent"
                                class="w-full px-4 py-3 rounded-lg bg-[#17263a] border border-[#2a3e5c] focus:border-brandColor focus:ring-1 focus:ring-brandColor outline-none" />
                        </div>
                        <div>
                            <label class="block text-sm mb-2">Amount</label>
                            <input type="number" name="amount" placeholder="e.g. 500"
                                class="w-full px-4 py-3 rounded-lg bg-[#17263a] border border-[#2a3e5c] focus:border-brandColor focus:ring-1 focus:ring-brandColor outline-none" />
                        </div>
                        <button type="submit"
                            class="w-full bg-brandColor text-gray-300 font-semibold py-3 rounded-lg hover:scale-[1.02] shadow-[0_0_20px_rgba(4,210,240,0.4)] hover:shadow-[0_0_30px_rgba(4,210,240,0.6)] transition">
                            Save Expense
                        </button>
                    </form>
                </div>

                <!-- Deposit Form -->
                <div
                    class="bg-[#121e2f]/90 p-8 rounded-2xl border border-[#22324a] shadow-[0_0_25px_rgba(4,210,240,0.08)]">
                    <h2 class="text-xl font-semibold mb-6 brandColor">Add Deposit</h2>
                    <form method="POST" action="{{ route('deposit.store') }}" class="space-y-5">
                        @csrf
                        <div>
                            <label class="block text-sm mb-2">Deposit Title</label>
                            <input type="text" name="note" placeholder="e.g. Client Payment"
                                class="w-full px-4 py-3 rounded-lg bg-[#17263a] border border-[#2a3e5c] focus:border-brandColor focus:ring-1 focus:ring-brandColor outline-none" />
                        </div>
                        <div>
                            <label class="block text-sm mb-2">Amount</label>
                            <input type="number" name="amount" placeholder="e.g. 1200"
                                class="w-full px-4 py-3 rounded-lg bg-[#17263a] border border-[#2a3e5c] focus:border-brandColor focus:ring-1 focus:ring-brandColor outline-none" />
                        </div>
                        <button type="submit"
                            class="w-full bg-brandColor text-gray-300 font-semibold py-3 rounded-lg hover:scale-[1.02] shadow-[0_0_20px_rgba(4,210,240,0.4)] hover:shadow-[0_0_30px_rgba(4,210,240,0.6)] transition">
                            Save Deposit
                        </button>
                    </form>
                </div>
            </div>

            <!-- Summary & Table Section -->
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Summary Section -->
                <div
                    class="bg-[#121e2f]/90 p-8 rounded-2xl border border-[#22324a] shadow-[0_0_25px_rgba(4,210,240,0.1)]">
                    <h2 class="text-2xl font-semibold mb-8 text-center brandColor">Summary</h2>

                    <div class="grid md:grid-cols-3 gap-6 text-center">
                        <div class="p-6 bg-[#17263a] rounded-xl border border-[#2a3e5c]">
                            <h3 class="text-gray-400 text-sm mb-2 uppercase tracking-wide">Total Expense</h3>
                            <p class="text-3xl font-bold text-red-400">-{{ $expenses ?? 0 }}</p>
                        </div>
                        <div class="p-6 bg-[#17263a] rounded-xl border border-[#2a3e5c]">
                            <h3 class="text-gray-400 text-sm mb-2 uppercase tracking-wide">Total Deposit</h3>
                            <p class="text-3xl font-bold text-green-400">+{{ $deposits ?? 0 }}</p>
                        </div>
                        <div class="p-6 bg-[#17263a] rounded-xl border border-[#2a3e5c]">
                            <h3 class="text-gray-400 text-sm mb-2 uppercase tracking-wide">Current Balance</h3>
                            <p class="text-3xl font-bold brandColor">${{ ($deposits ?? 0) - ($expenses ?? 0) }}</p>
                        </div>
                    </div>
                </div>

                <!-- Transaction Table -->
                <div
                    class="bg-[#121e2f]/90 p-8 rounded-2xl border border-[#22324a] shadow-[0_0_25px_rgba(4,210,240,0.1)] overflow-x-auto">
                    <h2 class="text-2xl font-semibold mb-6 text-center brandColor">Recent Transactions</h2>
                    <table class="min-w-full text-sm">
                        <thead>
                            <tr class="text-gray-400 border-b border-[#2a3e5c]">
                                <th class="text-left py-3 px-4">Type</th>
                                <th class="text-left py-3 px-4">Name</th>
                                <th class="text-right py-3 px-4">Amount</th>
                                <th class="text-right py-3 px-4">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user->expenses as $expense)
                                <tr class="border-b border-[#1f3049] hover:bg-[#17263a]/60 transition">
                                    <td class="py-3 px-4 text-red-400">Expense</td>
                                    <td class="py-3 px-4">{{ $expense->note }}</td>
                                    <td class="py-3 px-4 text-right">-{{ $expense->amount }}</td>
                                    <td class="py-3 px-4 text-right">{{ $expense->created_at->format('M d, Y') }}</td>
                                </tr>
                            @endforeach
                            @foreach ($user->deposits as $deposit)
                                <tr class="border-b border-[#1f3049] hover:bg-[#17263a]/60 transition">
                                    <td class="py-3 px-4 text-green-400">Deposit</td>
                                    <td class="py-3 px-4">{{ $deposit->note }}</td>
                                    <td class="py-3 px-4 text-right">+{{ $deposit->amount }}</td>
                                    <td class="py-3 px-4 text-right">{{ $deposit->created_at->format('M d, Y') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-user-layout>
