<?php

class MinecraftController extends BaseController {

	public function index()
	{
		return View::make('minecraft.minecraft');
	}
    public function tutorial()
    {
        return View::make('minecraft.tutorial');
    }

    public function tutorials($tutorial)
    {
        $tutorial = strtolower($tutorial);
        if($tutorial != null || $tutorial != ""){
            if($tutorial == "all"){
                return View::make('tutorial');
            }
            if(View::exists('minecraft.tutorials.' . $tutorial)){
                return View::make('minecraft.tutorials.' . $tutorial);
            }
        }
        return View::make('minecraft.tutorial');
    }

}
