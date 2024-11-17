<?php
$content = '<div class="text-center">
            <p class="text-base font-semibold text-brand">' . $code . '</p>
            <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">' . $message . '</h1>
            <div class="flex items-center justify-center mt-10 gap-x-6">
                <a href="/" class="rounded-md bg-brand px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-brand focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-brand">
                    برو به صفحه اصلی
                </a>
            </div>
        </div>';
require APP_DIR . '/view/layouts/main.php';
