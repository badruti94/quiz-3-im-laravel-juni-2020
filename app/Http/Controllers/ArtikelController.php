<?php

namespace App\Http\Controllers;

use App\Models\ArtikelModel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $items = ArtikelModel::get_all();

        return view('artikel.index', compact('items'));
    }

    public function show($id)
    {
        $item = ArtikelModel::get_by_id($id);

        return view('artikel.show', compact('item'));
    }

    public function create()
    {
        return view('artikel.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['slug'] = $this->getSlug($data['judul']);
        $data['user_id'] = '1';
        $item = ArtikelModel::save($data);

        if ($item) {
            return redirect('/artikel');
        }
    }

    public function edit($id)
    {
        $item = ArtikelModel::get_by_id($id);

        return view('artikel.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['slug'] = $this->getSlug($data['judul']);
        $item = ArtikelModel::update($data, $id);

        return redirect('/artikel');
    }

    public function destroy($id)
    {
        $item = ArtikelModel::delete($id);
        
        return redirect('/artikel');
    }

    private function getSlug($judul)
    {
        $judul = explode(' ', $judul);
        $slug = [];
        foreach ($judul as $jdl) {
            $slug[] = strtolower($jdl);
        }
        $slug = implode('-', $slug);
        return $slug;
    }
}
