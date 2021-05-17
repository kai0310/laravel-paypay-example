<div
    {{ $attributes->merge(['class' => 'card flex flex-col justify-center p-10 bg-white rounded-lg shadow-2xl max-w-2xl']) }}
>
    <div class="prod-title">
        <p class="text-2xl uppercase text-gray-900 font-bold">
            {{ $name }}
        </p>
        <p class="uppercase text-sm text-gray-400">
            {{ $description }}
        </p>
    </div>
    <div class="prod-img">
        <img
            src="https://unsplash.com/photos/IJjfPInzmdk/download?force=true&w=1920"
            class="w-full object-cover object-center"
            alt="Item's picture"
        />
    </div>
    <div class="prod-info grid gap-10">
        <div class="flex flex-col md:flex-row justify-between items-center text-gray-900">
            <p class="font-bold text-xl">
                {{ $price }} yen
            </p>

            <button type="submit">
                <img
                    src="{{ asset('paypay-button.png') }}"
                    alt="{{ __('PayPayでお支払い') }}"
                    class="w-44"
                />
            </button>
        </div>
    </div>
</div>
