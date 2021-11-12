<div class="home-filter">
    <form method="get" action="">
        <div class="filter">
            <div class="main-ingredient">
                <br><label for="main-ingredient"><h4>Main ingredient</h4></label><br>
                {{-- TODO check for proper list--}}
                {{--TODO replace with for each, 1 label, array all ingredients in json--}}
                <label for="vegetables"><input type="radio" id="vegetables" name="main-ingredient" value="Vegetables">Vegetables</label><br>
                <label for="fruit"><input type="radio" id="fruit" name="main-ingredient"
                                          value="Fruits">Fruit</label><br>
                <label for="Chicken"><input type="radio" id="chicken" name="main-ingredient"
                                            value="Chicken">Chicken</label><br>
                <label for="Beef"><input type="radio" id="beef" name="main-ingredient" value="Beef">Beef</label><br>
                <label for="Pork"><input type="radio" id="pork" name="main-ingredient" value="Pork">Pork</label><br>
                <label for="Lamb"><input type="radio" id="lamb" name="main-ingredient" value="Lamb">Lamb</label><br>
                <label for="Game"><input type="radio" id="game" name="main-ingredient" value="Game">Game</label><br>
                <label for="Fish"><input type="radio" id="fish" name="main-ingredient" value="Fish">Fish</label><br>
                <label for="Seafood"><input type="radio" id="seafood" name="main-ingredient"
                                            value="Seafood">Seafood</label><br>
                <label for="Eggs"><input type="radio" id="eggs" name="main-ingredient" value="Eggs">Eggs</label><br>
                <label for="Cheese"><input type="radio" id="cheese" name="main-ingredient" value="Cheese">Cheese</label><br>
                <label for="Bread"><input type="radio" id="bread" name="main-ingredient" value="Bread">Bread</label><br>
                <label for="Pasta"><input type="radio" id="pasta" name="main-ingredient" value="Pasta">Pasta</label><br>
                <label for="Rice"><input type="radio" id="rice" name="main-ingredient" value="Rice">Rice</label><br>
                <label for="Potato"><input type="radio" id="potato" name="main-ingredient" value="Potato">Potato</label><br>
                <label for="Couscous"><input type="radio" id="couscous" name="main-ingredient" value="Couscous">Couscous</label><br>

            </div>
            <div class="dish-type">
                <br><label for="dish-type"><h4>Dish type</h4></label><br>
                <label for="Breakfast"><input type="radio" id="breakfast" name="dish-type"
                                              value="Breakfast">Breakfast</label><br>
                <label for="Brunch"><input type="radio" id="brunch" name="dish-type" value="Brunch">Brunch</label><br>
                <label for="Lunch"><input type="radio" id="lunch" name="dish-type" value="Lunch">Lunch</label><br>
                <label for="Snack"><input type="radio" id="snack" name="dish-type" value="Snack">Snack</label><br>
                <label for="Dinner"><input type="radio" id="dinner" name="dish-type" value="Dinner">Dinner</label><br>
                <label for="Dessert"><input type="radio" id="dessert" name="dish-type"
                                            value="Dessert">Dessert</label><br>
            </div>
            <div class="special-occasions">
                <br><label for="special-occasions"><h4>Special occasions</h4></label><br>
                <label for="Vegetarian"><input type="radio" id="vegetarian" name="special-occasions" value="Vegetarian">Vegetarian</label><br>
                <label for="Vegan"><input type="radio" id="vegan" name="special-occasions"
                                          value="Vegan">Vegan</label><br>
                <label for="Dairy-free"> <input type="radio" id="dairy-free" name="special-occasions"
                                                value="Dairy-free">Dairy-free</label><br>
                <label for="Gluten-free"><input type="radio" id="gluten-free" name="special-occasions"
                                                value="Gluten-free">Gluten-free</label><br>

            </div>
        </div>
        <div class="filter-btn">
            <button type="submit" class="search-btn"><i class="fas fa-search"></i></button>
        </div>
    </form>
</div>
