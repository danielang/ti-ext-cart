<div class="option option-select">
    <?php if (count($optionValues = $menuOption->getOptionValues())) { ?>
        <select
            name="menu_options[<?= $index; ?>][option_values][]"
            class="form-control"
        >
            <option><?= $menuOption->option_name; ?></option>
            <?php foreach ($optionValues as $optionValue) { ?>
                <?php
                $isSelected = ($cartItem AND $cartItem->hasOptionValue($optionValue->menu_option_value_id));
                ?>
                <option
                    value="<?= $optionValue->menu_option_value_id; ?>"
                    <?= ($isSelected OR $optionValue->isDefault()) ? 'selected="selected"' : ''; ?>
                ><?= $optionValue->name; ?>&nbsp;&nbsp;-&nbsp;&nbsp;<?= currency_format($optionValue->price); ?></option>
            <?php } ?>
        </select>
    <?php } ?>
</div>
