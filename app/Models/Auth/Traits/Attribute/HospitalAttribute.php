<?php

namespace App\Models\Auth\Traits\Attribute;

/**
 * Trait HospitalAttribute.
 */
trait HospitalAttribute
{
    /**
     * @return string
     */
    public function getShowButtonAttribute()
    {
        return '<a href="'.route('admin.hospital.show', $this).'" class="btn btn-info"><i class="fa fa-search" data-toggle="tooltip" data-placement="top" title="'.__('buttons.general.crud.view').'"></i></a>';
    }

    /**
     * @return string
     */
    public function getEditButtonAttribute()
    {
        return '<a href="'.route('admin.hospital.edit', $this).'" class="btn btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="'.__('buttons.general.crud.edit').'"></i></a>';
    }

    /**
     * @return string
     */
    public function getStatusButtonAttribute()
    {
        return ($this->active) 
        ? '<a href="'.route('admin.hospital.status', $this).'" name="confirm_item" class="btn btn-danger"><i class="fa fa-toggle-on" data-toggle="tooltip" data-placement="top" title="'.__('buttons.general.crud.inactive').'"></i></a> '
        : '<a href="'.route('admin.hospital.status', $this).'" name="confirm_item" class="btn btn-danger"><i class="fa fa-toggle-off" data-toggle="tooltip" data-placement="top" title="'.__('buttons.general.crud.active').'"></i></a> ';
    }
    
    /**
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        return '
    	<div class="btn-group btn-group-sm" role="group" aria-label="Hospital Actions">
		  '.$this->show_button.'
		  '.$this->edit_button.'
		  '.$this->status_button.'
		</div>';
    }
    
    /**
     * @return string
     */
    public function getStatusLabelAttribute()
    {
        if ($this->active) {
            return "<span class='badge badge-success'>".__('labels.general.active').'</span>';
        }

        return "<span class='badge badge-danger'>".__('labels.general.inactive').'</span>';
    }
}
