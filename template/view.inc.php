<input type="hidden" name="id" value="<?php echo $model->get_id(); ?>">

<div class="form-group">
    <label for="inputName">Nombre<span class="align-middle" style="color: red; font-size: 0.5rem;"><i class="fas fa-asterisk"></i></span></label>
    <input type="text" class="form-control" id="inputName" name="name" maxlength="50" style="text-transform: uppercase;" placeholder="" value="<?php echo $model->get_name(); ?>" readonly>
</div>

<div class="form-check mb-3">
    <input type="checkbox" class="form-check-input" id="checkActive" name="active" <?php if ($model->is_active()) echo 'checked'; ?> onclick="return false;" disabled readonly>
    <label class="form-check-label" for="checkActive">Vigente</label>
</div>