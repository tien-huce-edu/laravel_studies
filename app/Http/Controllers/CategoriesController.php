<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return "Categories list";
    }

    public function getCategory($id)
    {
        return "Get one category with id = $id";
    }

    public function updateCategories($id)
    {
        return "Update one category with id = $id";
    }

    public function addCategories()
    {
        return "Add new category";
    }

    public function handleAddCategories()
    {
        return "Handle add new category";
    }

    public function deleteCategories($id)
    {
        return "Delete one category with id = $id";
    }
}
