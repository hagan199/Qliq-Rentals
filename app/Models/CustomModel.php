<?php namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;
class CustomModel extends Model{

    protected $db;

    public function __construct(ConnectionInterface &$db) 
    { 
        $this->db =& $db; 
    }

    
    public function getcanopy($row_data) 
    {   $rowperpage = 3;
        $builder = $this->db->table('vendor_service_tbl');
        $builder->where('category_id',13);
        $builder->limit('3', $rowperpage);
        $query_canopy = $builder->get()->getResultArray();
        foreach($query_canopy as $u){
        $ouput = '
        <div class="col-lg-4 post">
        <div class="card-item car-card mb-0">
                            <div class="card-img">
                                <a href="car-single.html" class="d-block">
                                    <img  src="/uploads/images/'. $u['name'] .' " alt="car-img">
                                </a>
                                <span class="badge">Bestseller</span>
                                <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top"
                                    title="Save for later">
                                    <i class="la la-heart-o"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-meta">'. get_column_name_by_id('service_tbl', $u['service_id'], 'service_name') .'</p>
                                <h3 class="card-title"><a href="car-single.html">'. get_column_name_by_id('category_service_tbl', $u['category_id'], 'category_name') .'</a></h3>
                                <div class="card-rating">
                                <h2 class="card-title"><a href="car-single.html">'. get_column_name_by_id('sub_category_service_tbl', $u['sub_category_id'], 'sub_cat_name') .'</a></h2>
                                </div>
                                <div class="card-attributes">
                                </div>
                                <div class="card-price d-flex align-items-center justify-content-between">
                                    <p>
                                        <span class="price__num">Gh¢.'. $u['price'] .'</span>
                                        <span class="price__text">Per day</span>
                                    </p>
                                    <div class="card-btn">
                                        <a href="/book/'. $u['id'] .'" class="theme-btn theme-btn-transparent">Book Now</a>
                                    </div>
                                </div>
                            </div>
    </div><!-- end container -->
    </div>';
        }

        return $ouput;
    }
            } 
        ?>