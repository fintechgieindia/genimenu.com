<li>
    <a href="{{ $link }}" wire:navigate
        @class([
            'flex items-center px-3 py-2.5 text-sm rounded-lg transition-all duration-150 group font-medium',
            'bg-skin-base text-white shadow-sm font-semibold' => $active,
            'text-slate-700 hover:text-slate-900 hover:bg-slate-100 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white' => !$active,
        ])>
        {!! $customIcon ?? $icon !!}
        <span class="ltr:ml-3 rtl:mr-3" sidebar-toggle-item>{{ $name }}</span>
    </a>
</li>
