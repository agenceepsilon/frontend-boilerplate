<?php
    // INT to DEV
    // Module: Forms common style sample
?>

<div class="mod mod--form-sample">
    <h1 class="mod_title">Forms</h1>

    <div class="mod_content">
        <form class="form" action="#" method="post">
            <div class="form_row">
                <h2>Inputs / Textarea</h2>
            </div>
            <div class="form_row<?php echo defined('ERROR_CLASS') ? ERROR_CLASS : ''; ?>">
                <label class="form_label">Input</label>

                <div class="form_input">
                    <input type="text" placeholder="Type Text">
                </div>
                <span class="help-block">This value is too short. It should have 5 characters or more.</span>
            </div>
            <div class="form_row<?php echo defined('ERROR_CLASS') ? ERROR_CLASS : ''; ?>">
                <label class="form_label">Input password</label>

                <div class="form_input">
                    <input type="password" placeholder="Type Password">
                </div>
                <span class="help-block">This value is too short. It should have 5 characters or more.</span>
            </div>
            <div class="form_row">
                <label class="form_label">Textarea</label>
                <textarea placeholder="Textarea"></textarea>
                <span class="help-block">This value is too short. It should have 5 characters or more.</span>
            </div>
            <div class="form_row">
                <h2>Buttons</h2>
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
                <h2>Selects</h2>
            </div>
            <div class="form_row">
                <label class="form_label">Select</label>

                <div class="form_select">
                    <select>
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                    </select>
                </div>
            </div>
            <div class="form_row">
                <h2>Checkbox</h2>
            </div>
            <div class="form_row">
                <div class="form_checkbox">
                    <input type="checkbox" id="checkbox-1"> <label for="checkbox-1">Checkbox</label>
                </div>
                <div class="form_checkbox">
                    <input type="checkbox" id="checkbox-2"> <label for="checkbox-2">Checkbox</label>
                </div>
                <div class="form_checkbox">
                    <input type="checkbox" id="checkbox-3"> <label for="checkbox-3">Checkbox</label>
                </div>
            </div>
            <div class="form_row">
                <h2>Radio</h2>
            </div>
            <div class="form_row">
                <div class="form_radio">
                    <input type="radio" id="radio-1" name="group-1"> <label for="radio-1">Radio</label>
                </div>
                <div class="form_radio">
                    <input type="radio" id="radio-2" name="group-1"> <label for="radio-2">Radio</label>
                </div>
                <div class="form_radio">
                    <input type="radio" id="radio-3" name="group-1"> <label for="radio-3">Radio</label>
                </div>
            </div>
        </form>
    </div>
</div>