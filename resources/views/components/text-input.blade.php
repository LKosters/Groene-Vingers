@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-[#6CC63F] dark:focus:border-[#6CC63F] focus:ring-[#6CC63F] dark:focus:ring-[#6CC63F] rounded-md shadow-sm']) !!}>
