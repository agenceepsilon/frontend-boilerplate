<?php
    // INT to DEV
    // Module: Forms common style sample
?>

<div class="form-sample">
    <form class="form" action="#" method="post">
        <div class="form__row">
            <h2>Inputs / Textarea</h2>
        </div>
        <div class="form__row<?php echo isset($error) ? ' ' . ERROR_CLASS : '' ?>">
            <label class="label">Input</label>

            <div class="input">
                <input type="text" placeholder="Type Text">
            </div>
            <span class="help-block">This value is too short. It should have 5 characters or more.</span>
        </div>
        <div class="form__row<?php echo isset($error) ? ' ' . ERROR_CLASS : '' ?>">
            <label class="label">Input password</label>

            <div class="input">
                <input type="password" placeholder="Type Password">
            </div>
            <span class="help-block">This value is too short. It should have 5 characters or more.</span>
        </div>
        <div class="form__row<?php echo isset($error) ? ' ' . ERROR_CLASS : '' ?>">
            <label class="label">Textarea</label>
            <textarea class="textarea" placeholder="Textarea"></textarea>
            <span class="help-block">This value is too short. It should have 5 characters or more.</span>
        </div>
        <div class="form__row">
            <h2>Buttons</h2>
        </div>
        <div class="form__row">
            <div class="btn">
                <input type="submit" value="Type Submit">
            </div>
        </div>
        <div class="form__row">
            <div class="btn btn--disable">
                <input type="submit" disabled="disabled" value="Type Submit - Option Disabled">
            </div>
        </div>
        <div class="form__row">
            <div class="btn">
                <button type="button">Type Button</button>
            </div>
        </div>
        <div class="form__row">
            <div class="btn"><a href="#">Button HTML "a"</a></div>
        </div>
        <div class="form__row">
            <div class="btn"><span>Button HTML "span"</span></div>
        </div>
        <div class="form__row">
            <h2>Selects</h2>
        </div>
        <div class="form__row<?php echo isset($error) ? ' ' . ERROR_CLASS : '' ?>">
            <label class="label">Select</label>

            <div class="select">
                <select>
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                </select>
            </div>
            <span class="help-block">This value is too short. It should have 5 characters or more.</span>
        </div>
        <div class="form__row">
            <h2>Checkbox</h2>
        </div>
        <div class="form__row">
            <div class="checkbox">
                <input type="checkbox" id="checkbox-1"> <label for="checkbox-1">Checkbox</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" id="checkbox-2"> <label for="checkbox-2">Checkbox</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" id="checkbox-3"> <label for="checkbox-3">Checkbox</label>
            </div>
        </div>
        <div class="form__row">
            <h2>Radio</h2>
        </div>
        <div class="form__row">
            <div class="radio">
                <input type="radio" id="radio-1" name="group-1"> <label for="radio-1">Radio</label>
            </div>
            <div class="radio">
                <input type="radio" id="radio-2" name="group-1"> <label for="radio-2">Radio</label>
            </div>
            <div class="radio">
                <input type="radio" id="radio-3" name="group-1"> <label for="radio-3">Radio</label>
            </div>
        </div>
    </form>
</div>
