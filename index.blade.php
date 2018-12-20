


        @foreach($products as $product)

               Наименование:{{ $product->title }}<br>
        Описание:{{ $product->content }}<br>
        Цена: {{ $product->price }}<br>


        @endforeach


