{{--TODO check for input attributes--}}

<div class="create-recipe-container">
        <div class="create-gallery">
            <form>
                <label for="img">Select image(s)</label>
                <input type="image" id="img" name="img" accept="image/*">
                <input type="submit" value="Save images">
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
        {{--TODO add dropdown with selectable quantities--}}
        {{--TODO let user add additional row--}}
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
