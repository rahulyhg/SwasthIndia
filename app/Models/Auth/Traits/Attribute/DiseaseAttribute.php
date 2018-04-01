<?php

namespace App\Models\Auth\Traits\Attribute;

/**
 * Trait UserAttribute.
 */
trait DiseaseAttribute
{
     /**
     * @return string
     */
    public function getShowButtonAttribute()
    {
        return '<a href="'.route('admin.disease.show', $this).'" class="btn btn-info"><i class="fa fa-search" data-toggle="tooltip" data-placement="top" title="'.__('buttons.general.crud.view').'"></i></a>';
    }

    /**
     * @return string
     */
    public function getEditButtonAttribute()
    {
        return '<a href="'.route('admin.disease.edit', $this).'" class="btn btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="'.__('buttons.general.crud.edit').'"></i></a>';
    }
    /**
     * @return string
     */
    public function getDeletePermanentlyButtonAttribute()
    {
        return '<a href="'.route('admin.disease.delete', $this).'" name="confirm_item" class="btn btn-danger"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="'.__('buttons.backend.access.disease.destroy').'"></i></a> ';
    }

    /**
     * @return string
     */
    public function getActionButtonsAttribute()
    {

        return '
    	<div class="btn-group btn-group-sm" role="group" aria-label="User Actions">
            '.$this->show_button.'
            '.$this->edit_button.'
            '.$this->delete_permanently_button.'
        </div>';
    }

}
