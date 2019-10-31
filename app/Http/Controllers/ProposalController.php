<?php

namespace App\Http\Controllers;

use App\Proposal;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProposalController extends Controller
{
    public function show()
    {
        $provider_id = Auth::id();
        $proposals = Proposal::where('provider_id', $provider_id)->get();

        return view('proposals.provider-index', compact('proposals'));
    }

    public function clientProposals()
    {
        $client_id = Auth::id();
        $services = Service::where('client_id', $client_id)->has('proposals')->get();

        return view('proposals.index', compact('services'));
    }

    public function save($service_id)
    {
        $provider_id = Auth::user()->id;

        Proposal::create([
            'provider_id' => $provider_id,
            'service_id' => $service_id
        ]);

        return redirect('services/detail/' . $service_id); //->with(('message', 'created successfully');
    }

    public function remove($proposal_id)
    {
        $service_id = Proposal::findOrFail($proposal_id)->service_id;
        Proposal::destroy($proposal_id);

        return redirect('services/detail/' . $service_id); //->with(('message', 'created successfully');
    }

    public function clientProposal($service_id)
    {
        $service = Service::findOrFail($service_id);

        return view('proposals.proposal', compact('service'));
    }

    public function proposalAccept($id)
    {
        $proposal = Proposal::findOrFail($id);
        $proposal->update([
            'status' => 'accepted'
        ]);

        return redirect('/client/services/detail/' . $proposal->service_id);
    }

    public function proposalDecline($id)
    {
        $proposal = Proposal::findOrFail($id);
        $proposal->update([
            'status' => 'declined'
        ]);

        return redirect('/client/services/detail/' . $proposal->service_id);
    }
}
