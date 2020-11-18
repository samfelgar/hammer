<?php

namespace App\Http\Controllers;

use App\Advertisement;
use App\Enums\Status;
use App\Exceptions\ServiceCancelingException;
use App\Http\Requests\StoreService;
use App\PaymentMethod;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Advertisement $advertisement
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function create(Request $request, Advertisement $advertisement)
    {
        $this->authorize('create', [Service::class, $advertisement]);
        return response()->view('services.create', [
            'advertisement' => $advertisement,
            'client' => $request->user(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreService $request
     * @param Advertisement $advertisement
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreService $request, Advertisement $advertisement)
    {
        $payment = PaymentMethod::find($request->payment);
        $service = new Service();
        $service->fill($request->validated());
        $service->advertisement()->associate($advertisement);
        $service->paymentMethod()->associate($payment);
        $service->os = uniqid();
        $service->status = Status::aceitacao();
        $service->save();
        return redirect()->route('services.show', [$service])->with('success', 'Serviço adicionado.');
    }

    /**
     * Display the specified resource.
     *
     * @param Service $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return response()->view('services.show', [
            'service' => $service
        ]);
    }

    public function accept(Service $service)
    {
        $service->status = Status::aguardandoPagamento();
        $service->save();
        return redirect()->route('professionals.dashboard', [$service->professional])
            ->with('success', 'Serviço aceito.');
    }

    public function start(Service $service)
    {
        $service->status = Status::emAndamento();
        $service->save();
        return redirect()->route('professionals.dashboard', [$service->professional])
            ->with('success', 'Serviço em andamento.');
    }

    public function finish(Service $service)
    {
        $service->status = Status::liberarPagamento();
        $service->save();
        return redirect()->route('professionals.dashboard', [$service->professional])
            ->with('success', 'Serviço concluído.');
    }

    public function clientFinish(Service $service)
    {
        if (!$service->status->equals(Status::emAndamento())) {
            throw new BadRequestHttpException('A situação do serviço não permite sua conclusão.');
        }
        $service->status = Status::aguardandoConclusao();
        $service->save();
        return redirect()->route('clients.dashboard')->with('success', 'Operação realizada com sucesso.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Service $service
     * @return void
     * @throws ServiceCancelingException
     */
    public function destroy(Service $service)
    {
        try {
            if ($service->status > Status::pagamentoEfetuado()) {
                throw new ServiceCancelingException();
            }
            $service->delete();
        } catch (ServiceCancelingException $exception) {
            throw $exception;
        } catch (\Exception $exception) {
            throw $exception;
        }
    }
}
