<?php

//This is a work in progress for later
// / car.car_id, car.price,car.year, car.manufacturer, car.model, car.colour, car_images.file_name, car_images.id as image_id, wishlist.id as wishlist_id, wishlist.user_id 
class car
{
    public int $car_id;
    public float $price;
    public int $year;
    public string $manufacturer;
    public string $model;
    public string $image_file;
    public string $image_id;

    public function __construct(int $id, float $price, int $yr, string $manufacturer, string $model, string $image_file, string $image_id)
    {
        $this->car_id           = $id;
        $this->price            = $price;
        $this->year             = $yr;
        $this->manufacturer     = $manufacturer;
        $this->model            = $model;
        $this->image_file       = $image_file;
        $this->image_id         = $image_id;
    }
}
