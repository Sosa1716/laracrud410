
<style>
    header{
        background: rgba(79, 12, 12, 0.833);
        padding-block: 4px;
        margin-block: -8px;
        margin-inline: -8px;
    }

    nav p{
        font-family: Arial, Helvetica, sans-serif;
        font-size: 20px;
        padding-inline: 15px;

    }

    nav p a{
        color: lemonchiffon;
        text-decoration: none;
        padding-block: 10px;
        padding-inline: 10px;
        margin-inline: -4px;
    }

    nav :hover{
        background: rgba(83, 10, 10, 0.771);
        padding-block: 10px;
        padding-inline: 5px;
    }
</style>
   
        <header>
            <nav>
                <p>
                    <a href="{{route('index')}}">Inicio</a>
                    <a href="{{route('products.index')}}">Productos</a>
                    <a href="{{route('clients.index')}}">Clientes</a>
                    <a href="{{route('sales.index')}}">Ventas</a>
                </p>
            </nav>
        </header> 
        <br>