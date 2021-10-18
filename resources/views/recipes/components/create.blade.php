{{--TODO check for input attributes--}}
{{--TODO add dropdown with selectable ingredient quantities--}}
{{--TODO let user add additional row--}}
{{--TODO add ingredients and quantities with pictures--}}
{{--TODO adjust ingredients depending on nu;ber of persons for recipe--}}
{{--TODO add how long it takes to cook the recipe--}}

@extends('layouts.layout')
@section('content')
<div class="create-recipe-container">
        <div class="create-gallery">
            <form>
                <label for="img">Upload image(s)</label>
                <input type="image" id="img" name="img" accept="image/*">
                <input type="submit" value="Save images">
            </form>
        </div>
        <div class="create-title">
            <form>
                <label for="title">Add title</label>
                <input type="text" id="title" name="title">
                <input type="submit" value="Save title">

            </form>
        </div>
        <div class="create-tags">
            <form>
                <label for="tags">Add tag(s)</label>
                <input type="checkbox" id="tag1" name="tag1" value="#">
                <label for="tag1">Tag 1</label><br>
                <input type="checkbox" id="tag2" name="tag2" value="#">
                <label for="tag1">Tag 2</label><br>
                <input type="checkbox" id="tag3" name="tag3" value="#">
                <label for="tag1">Tag 3</label><br>
                <input type="checkbox" id="tag4" name="tag4" value="#">
                <label for="tag1">Tag 4</label><br>
                <input type="checkbox" id="tag5" name="tag5" value="#">
                <label for="tag1">Tag 5</label><br>
                <input type="submit" value="Save tags">
            </form>
        </div>
        <div class="create-ingredients">
            <form>
                <label for="tags">Add ingredients</label>
                <table>
                    <thead>
                    <tr>
                        <th>Quantities</th>
                        <th>Measurements</th>
                        <th>Ingredients</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>text1.1</td>
                        <td>text1.2</td>
                        <td>text1.3</td>
                    </tr>
                    <tr>
                        <td>text2.1</td>
                        <td>text2.2</td>
                        <td>text2.3</td>
                    </tr>
                    <tr>
                        <td>text3.1</td>
                        <td>text3.2</td>
                        <td>text3.3</td>
                    </tr>
                    <tr>
                    </tr>
                    </tbody>
                </table>
                <input type="submit" value="Save ingredients">
            </form>
        </div>
        <div class="instructions">
            <form>
{{--                TODO add bullets --}}
                <label for="tags">Add instructions</label>
                <input type="text">
                <input type="submit" value="Save instructions">
            </form>
        </div>
    </form>
</div>

@endsection

