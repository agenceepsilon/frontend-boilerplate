<?php
    // INT to DEV
    // Module : Forms general style sample
?>

<div class="mod mod--form-sample">
    <form class="form" action="#" method="post">
        <div class="form_row">
            <label>Inputs / Textarea</label>
        </div>
        <div class="form_row">
            <div class="form_input">
                <input type="text" placeholder="Type Text">
            </div>
        </div>
        <div class="form_row">
            <div class="form_input">
                <input type="password" value="Type Password">
            </div>
        </div>
        <div class="form_row">
            <textarea placeholder="Textarea"></textarea>
        </div>
        <div class="form_row">
            <label>Buttons</label>
        </div>
        <div class="form_row">
            <div class="btn">
                <input type="submit" value="Type Submit">
            </div>
        </div>
        <div class="form_row">
            <div class="btn">
                <input type="submit" disabled="disabled" value="Type Submit - Option Disabled">
            </div>
        </div>
        <div class="form_row">
            <div class="btn"><a href="#">Button HTML "a"</a></div>
        </div>
        <div class="form_row">
            <div class="btn"><span>Button HTML "span"</span></div>
        </div>
        <div class="form_row">
            <label>Selects</label>
        </div>
        <div class="form_row">
            <div class="form_select js-form-select">
                <select>
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                </select>
            </div>
        </div>
        <div class="form_row">
            <label>Checkbox</label>
        </div>
        <div class="form_row">
            <div class="form_checkbox">
                <input type="checkbox" id="checkbox"> <label for="checkbox">Checkbox</label>
            </div>
        </div>
        <div class="form_row">
            <label>Radio</label>
        </div>
        <div class="form_row">
            <div class="form_radio">
                <input type="radio" id="radio"> <label for="radio">Radio</label>
            </div>
        </div>
    </form>
</div>