<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\StoreAdvertisement;
use App\Photo;
use App\Professional;
use App\Advertisement;
use App\Phone;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Advertisement $advertisement)
    {
        return view('advertisements.all', [
            'advertisements' => Advertisement::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Professional $professional)
    {
        $this->authorizeResource('create', $professional);
        return response()->view('advertisements.create', [
            'professional' => $professional,
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreAdvertisement $request, Professional $professional)
    {
        $this->authorize('create', $professional);
        $category = Category::find($request->categoria);
        $advertisement = new Advertisement();
        $advertisement->fill($request->validated());
        $advertisement->data = new Carbon();
        $advertisement->category()->associate($category);
        $professional->advertisements()->save($advertisement);
        if ($request->has('photo')) {
            $photo = new Photo();
            $photo->path = $request->photo->store('advertisements');
            $photo->mime = $request->photo->getMimeType();
            $photo->descricao = $advertisement->titulo;
            $advertisement->photos()->save($photo);
        }
        return redirect()->route('professionals.dashboard', [
            $professional
        ]);



    }

    /**
     * Display the specified resource.
     *
     * @param Advertisement $advertisement
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show(Advertisement $advertisement)
    {
        $person = Professional::find($advertisement->person_id);
        return view('advertisements.ad', [
            'advertisements' => $advertisement,
            'professional' => $person,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Advertisement $advertisement
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit(Advertisement $advertisement)
    {
        $this->authorizeResource('update', $advertisement);
        return view('advertisements.edit', [
            'advertisements' => $advertisement,
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Advertisement $advertisement
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Advertisement $advertisement)
    {
        $this->authorizeResource('update', $advertisement);
        $category = Category::find($request->categoria);
        $advertisement->category()->associate($category);
        $data = $request->validate([
            'titulo' => 'required',
            'preco' => 'required',
            'descricao' => 'required',
        ]);
        $advertisement->fill($data)->save();
        return redirect()->route('professionals.dashboard', $advertisement->person_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advertisement $advertisement)
    {
        $this->authorizeResource('update', $advertisement);
        try {
            if (empty($advertisement)) {
                throw new \Exception('Acesso não permitido.');

            }

            $advertisement->delete();
            return redirect()->route('professionals.dashboard', $advertisement->professional);
        } catch (\Exception $e) {
            throw $e;
        }
    }

    /**
     * Retira a exclusão do Anuncio
     *
     * @param Advertisement $advertisement
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|void
     */
    public function restore($advertisement)
    {
        Advertisement::withTrashed()->where('id', $advertisement)->restore();
        return redirect(url()->previous());

    }
}
