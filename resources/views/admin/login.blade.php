<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login · ShebaTech</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-ink flex items-center justify-center font-sans">
    <div class="absolute inset-0 dot-grid pointer-events-none opacity-60"></div>

    <div class="relative w-full max-w-sm px-6">

        <div class="text-center mb-8">
            <div class="inline-block bg-white rounded-2xl px-4 py-2 mb-4">
                <img src="{{ asset('/ShebaTech.png') }}" alt="ShebaTech" class="h-12 w-auto object-contain mx-auto">
            </div>
            <p class="text-white/40 text-xs font-mono uppercase tracking-widest">Admin Panel</p>
        </div>

        <div class="bg-white/5 border border-white/10 rounded-2xl p-8 backdrop-blur-sm">
            <h1 class="text-white font-bold text-xl mb-6">Sign in</h1>

            <form method="POST" action="{{ route('admin.login.post') }}" class="space-y-4">
                @csrf

                <div>
                    <label class="block text-xs font-semibold text-white/50 uppercase tracking-widest mb-1.5">Email</label>
                    <input
                        type="email" name="email" value="{{ old('email') }}" autofocus
                        class="w-full bg-white/8 border border-white/15 rounded-xl px-4 py-3 text-white text-sm placeholder-white/25
                               focus:outline-none focus:border-brand focus:ring-2 focus:ring-brand/20 transition-all
                               @error('email') border-red-500/50 @enderror"
                        placeholder="admin@shebatech.com"
                    >
                    @error('email')
                    <p class="mt-1.5 text-xs text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-xs font-semibold text-white/50 uppercase tracking-widest mb-1.5">Password</label>
                    <input
                        type="password" name="password"
                        class="w-full bg-white/8 border border-white/15 rounded-xl px-4 py-3 text-white text-sm placeholder-white/25
                               focus:outline-none focus:border-brand focus:ring-2 focus:ring-brand/20 transition-all"
                        placeholder="••••••••"
                    >
                </div>

                <button
                    type="submit"
                    class="w-full mt-2 py-3 rounded-xl bg-brand text-ink font-bold text-sm hover:bg-brand-dark transition-all shadow-lg shadow-brand/20"
                >
                    Sign In to Admin
                </button>
            </form>
        </div>

        <p class="text-center mt-6 text-white/25 text-xs">
            <a href="/" class="hover:text-white/50 transition-colors">← Back to website</a>
        </p>
    </div>
</body>
</html>
