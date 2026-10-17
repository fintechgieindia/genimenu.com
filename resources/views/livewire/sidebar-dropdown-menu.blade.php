<li x-data="{ active: @entangle('active') }" x-init="if (active) { setTimeout(() => { $el.scrollIntoView({ behavior: 'smooth' }); }, 400); }">
    <a href="{{ $link }}" wire:navigate
        @class([
            'flex items-center px-3 py-2 text-sm transition-all duration-150 rounded-lg pl-11 group',
            'text-[#876039] bg-[#F7F3EE] font-semibold dark:bg-amber-950/30 dark:text-amber-300' => $active,
            'text-slate-600 hover:text-slate-900 hover:bg-slate-50 dark:text-gray-400 dark:hover:bg-gray-700/60 dark:hover:text-white font-medium' => !$active,
        ])>{{ $name }}</a>
</li>
