<style>
    {literal}
        *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    body{
        background-color: #f3f3f3;
        font-family: 'Poppins',sans-serif;
    }
    .menu{
        padding: 0;
        display: grid;
        grid-template-columns: repeat( auto-fit, minmax(350px,1fr));
        grid-gap: 20px 40px;
    }
    .heading{
        background-color: #cb202d;
        color: #ffffff;
        margin-bottom: 30px;
        padding: 40px 0 30px 0;
        grid-column: 1/-1;
        text-align: center;
    }
    .heading>h1{
        font-weight: 400;
        font-size: 30px;
        letter-spacing: 10px;
        margin-bottom: 10px;
    }
    .heading>h3{
        font-weight: 600;
        font-size: 22px;
        letter-spacing: 5px;
    }
    .food-items{
        display: grid;
        position: relative;
        grid-template-rows: auto 1fr;
        border-radius: 15px;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
        margin: 0 20px;
    }
    .food-items img{
        position: relative;
        width: 100%;
        border-radius: 15px 15px 0 0;
    }

    .details{
        padding: 20px 10px;
        display: grid;
        grid-template-rows: auto 1fr 50px;
        grid-row-gap: 15px;
    }
    .details-sub{
        display: grid;
        grid-template-columns: auto auto;
    }
    .details-sub>h5{
        font-weight: 600;
        font-size: 18px;
    }
    .price{
        text-align: right;
    }
    .details>p{
        color: #6f6f6f;
        font-size: 15px;
        line-height: 28px;
        font-weight: 400;
        align-self: stretch;
    }
    .details>button{
        background-color: #cb202d;
        border: none;
        color: #ffffff;
        font-size: 16px;
        font-weight: 600;
        border-radius: 5px;
        width: 180px;
    }
    {/literal}
</style>

<div class="page-wrapper">
    <div class="container-fluid">
        <div class="menu">
        <div class="heading">
            <h1>Cafeteen</h1>
            <h3>&mdash; MENU &mdash; </h3>
        </div>
        <div class="food-items">
            <img src="{$g_base_url}\templates\assets/uploadImage/foodImgs/burger.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Smoky Hamburger</h5>
                    <h5 class="price"> $8 </h5>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit reiciendis nam non quia! Earum eveniet minus. Facilis explicabo natus nihil voluptatem eveniet pariatur.</p>
                <button>Add To Cart</button>
            </div>
        </div>

        <div class="food-items">
            <img src="{$g_base_url}/templates/assets/uploadImage/foodImgs/poha_jalebi.png">
            <div class="details">
                <div class="details-sub">
                    <h5>Honey Garlic Chicken</h5>
                    <h5 class="price"> $15 </h5>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit dolor sit amet consectetur adipisicing elit.</p>
                <button>Add To Cart</button>
            </div>
        </div>

        <div class="food-items">
            <img src="{$g_base_url}\templates\assets/uploadImage/foodImgs/soup.jpeg">
            <div class="details">
                <div class="details-sub">
                    <h5>Manchow Soup</h5>
                    <h5 class="price"> $8 </h5>
                </div>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus quibusdam facilis, magni consectetur necessitatibus.</p>
                <button>Add To Cart</button>
            </div>
        </div>

        <div class="food-items">
            <img src="{$g_base_url}\templates\assets/uploadImage/foodImgs/Spaghetti.jpeg">
            <div class="details">
                <div class="details-sub">
                    <h5>Basil Pesto Spaghetti</h5>
                    <h5 class="price"> $12 </h5>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit lorem ipsum, dolor sit amet consectetur adipisicing elit</p>
                <button>Add To Cart</button>
            </div>
        </div>

        <div class="food-items">
            <img src="{$g_base_url}\templates\assets/uploadImage/foodImgs/pancakes.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Roast Salmon</h5>
                    <h5 class="price"> $15 </h5>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit</p>
                <button>Add To Cart</button>
            </div>
        </div>

        <div class="food-items">
            <img src="{$g_base_url}\templates\assets/uploadImage/foodImgs/Sandwich.jpeg">
            <div class="details">
                <div class="details-sub">
                    <h5>BBQ Sandwich</h5>
                    <h5 class="price"> $10 </h5>
                </div>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus reiciendis nam non quia! Earum eveniet quia minus nemo.</p>
                <button>Add To Cart</button>
            </div>
        </div>
        </div>
    </div>
</div>