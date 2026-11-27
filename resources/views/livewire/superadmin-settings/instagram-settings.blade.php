<div class="mx-4 p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">

    <div class="flex items-center justify-between pb-4 mb-4 border-b border-gray-200 dark:border-gray-700">
        <div class="flex items-center space-x-3">
            <div class="w-10 h-10 rounded-lg bg-gradient-to-tr from-yellow-400 via-pink-500 to-purple-600 flex items-center justify-center text-white shadow-sm">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                </svg>
            </div>
            <div>
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Instagram Reels Integration</h3>
                <p class="text-xs text-gray-500 dark:text-gray-400">Manage Meta Instagram Graph API credentials to automatically showcase live reels on your website.</p>
            </div>
        </div>

        <div class="flex items-center space-x-2">
            <button type="button" wire:click="refreshReelsCache" class="inline-flex items-center px-3 py-1.5 text-xs font-medium text-gray-700 bg-white border border-gray-300 rounded-lg shadow-sm hover:bg-gray-50 dark:bg-gray-700 dark:text-gray-200 dark:border-gray-600 dark:hover:bg-gray-600">
                <svg class="w-3.5 h-3.5 mr-1 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                </svg>
                Clear Reels Cache
            </button>
        </div>
    </div>

    {{-- Live Test Status Banner --}}
    @if ($testStatus === 'success')
        <div class="mb-5 p-4 rounded-lg bg-green-50 border border-green-200 dark:bg-green-900/30 dark:border-green-800 text-green-800 dark:text-green-300 flex items-start space-x-3">
            <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
            </svg>
            <div class="flex-1 text-sm">
                <p class="font-semibold">Meta API Verified Successfully!</p>
                <p class="mt-0.5 text-xs opacity-90">{{ $testMessage }}</p>
                <p class="mt-1 text-xs font-mono font-medium">Live reels are currently active and being served dynamically on your landing page.</p>
            </div>
        </div>
    @elseif ($testStatus === 'error')
        <div class="mb-5 p-4 rounded-lg bg-red-50 border border-red-200 dark:bg-red-900/30 dark:border-red-800 text-red-800 dark:text-red-300 flex items-start space-x-3">
            <svg class="w-5 h-5 text-red-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
            </svg>
            <div class="flex-1 text-sm">
                <p class="font-semibold">Connection Failed</p>
                <p class="mt-0.5 text-xs opacity-90">{{ $testMessage }}</p>
                <p class="mt-1 text-xs opacity-75">Fallback luxury static cards will continue to be displayed safely on your website until a valid token is provided.</p>
            </div>
        </div>
    @endif

    <form wire:submit.prevent="submitForm">
        <div class="grid gap-6">

            {{-- Row 1: Token ID --}}
            <div>
                <div class="flex items-center justify-between">
                    <x-label for="instagramAccessToken" value="Instagram Access Token (Token Key)" />
                    <span class="text-xs text-gray-500 dark:text-gray-400">From Meta Developer Portal</span>
                </div>
                <textarea id="instagramAccessToken" rows="3" wire:model.defer="instagramAccessToken"
                    class="block mt-1 w-full text-xs font-mono border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                    placeholder="Paste your Meta Long-Lived User Access Token here (e.g. IGAAxxxxxx... or EAABxxxxxx...)"></textarea>
                <x-input-error for="instagramAccessToken" class="mt-2" />
                <p class="mt-1.5 text-xs text-gray-500 dark:text-gray-400">
                    This token is generated from Meta for Developers (Instagram Graph API). It securely authorizes Geni Menu to read public reels.
                </p>
            </div>

            <div class="grid lg:grid-cols-3 gap-6">

                {{-- Instagram Username --}}
                <div>
                    <x-label for="instagramUsername" value="Instagram Username / Handle" />
                    <div class="relative mt-1">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-500 text-sm">@</span>
                        <x-input id="instagramUsername" class="block w-full pl-8" type="text" wire:model.defer="instagramUsername" placeholder="genimenu" />
                    </div>
                    <x-input-error for="instagramUsername" class="mt-2" />
                    <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">Used for profile links.</p>
                </div>

                {{-- Instagram Business Account ID --}}
                <div>
                    <x-label for="instagramAccountId" value="Instagram Account ID" />
                    <x-input id="instagramAccountId" class="block mt-1 w-full font-mono text-sm" type="text" wire:model.defer="instagramAccountId" placeholder="17841456598601647" />
                    <x-input-error for="instagramAccountId" class="mt-2" />
                    <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">Found in Meta Business Settings &rarr; Instagram Accounts (ID: 17841456598601647).</p>
                </div>

                {{-- Cache Duration --}}
                <div>
                    <x-label for="instagramCacheTime" value="Cache Duration" />
                    <x-select id="instagramCacheTime" class="block mt-1 w-full" wire:model.defer="instagramCacheTime">
                        <option value="1800">30 Minutes (1,800 sec)</option>
                        <option value="3600">1 Hour (3,600 sec)</option>
                        <option value="7200">2 Hours — Recommended (7,200 sec)</option>
                        <option value="14400">4 Hours (14,400 sec)</option>
                        <option value="28800">8 Hours (28,800 sec)</option>
                        <option value="86400">24 Hours (86,400 sec)</option>
                    </x-select>
                    <x-input-error for="instagramCacheTime" class="mt-2" />
                    <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">How long reels are cached locally.</p>
                </div>

            </div>

            {{-- Helpful Guide Box --}}
            <div class="p-4 rounded-lg bg-gray-50 border border-gray-200 dark:bg-gray-900/50 dark:border-gray-700">
                <h4 class="text-xs font-semibold text-gray-800 dark:text-gray-200 uppercase tracking-wider mb-2 flex items-center">
                    <svg class="w-4 h-4 mr-1.5 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    How to get your Instagram Access Token:
                </h4>
                <ol class="list-decimal list-inside text-xs text-gray-600 dark:text-gray-400 space-y-1">
                    <li>Open <a href="https://developers.facebook.com" target="_blank" rel="noopener noreferrer" class="text-indigo-600 dark:text-indigo-400 underline font-medium">developers.facebook.com</a> and sign in.</li>
                    <li>Click <strong>My Apps &rarr; Create App &rarr; Other &rarr; Consumer / Business</strong>.</li>
                    <li>Add the <strong>Instagram Graph API</strong> product to your app.</li>
                    <li>Add your Instagram account under <strong>Instagram Testers</strong> and accept the invitation in your Instagram Settings.</li>
                    <li>Click <strong>Generate Token</strong>, copy the key, and paste it into the field above.</li>
                </ol>
            </div>

            {{-- Actions --}}
            <div class="flex items-center space-x-3 pt-2">
                <x-button type="submit" wire:loading.attr="disabled">
                    <span wire:loading.remove wire:target="submitForm">Save Settings</span>
                    <span wire:loading wire:target="submitForm">Saving...</span>
                </x-button>

                <button type="button" wire:click="testConnection" wire:loading.attr="disabled"
                    class="inline-flex items-center px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-800 text-sm font-medium rounded-md border border-gray-300 shadow-sm transition dark:bg-gray-700 dark:text-gray-200 dark:border-gray-600 dark:hover:bg-gray-600">
                    <span wire:loading.remove wire:target="testConnection">
                        <svg class="w-4 h-4 mr-1.5 inline -mt-0.5 text-gray-600 dark:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Test Meta Connection
                    </span>
                    <span wire:loading wire:target="testConnection">Verifying with Meta...</span>
                </button>
            </div>

        </div>
    </form>

</div>
