<x-layout.views>
    <x-form.url />
    <div>Welcome</div>
    <div x-data>
        <div x-text="$store.shop.name">shop-name</div>
        <div>
            Here you can buy:
            <ul>
                <template x-for="product in $store.shop.products">
                    <li x-text="product"></li>
                </template>
            </ul>
        </div>
    </div>
</x-layout.views>
