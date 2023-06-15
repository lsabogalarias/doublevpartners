<?php
namespace App\GraphQL\Mutations;

use App\Models\Ticket;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Mutation;

class UpdateTicketMutation extends Mutation
{
    protected $attributes = [
        'name' => 'updateTicket',
    ];

    public function type(): Type
    {
        return GraphQL::type('Ticket');
    }

    public function args(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
            ],
            'input' => [
                'type' => GraphQL::type('TicketInput'),
            ],
        ];
    }

    public function resolve($root, $args)
    {
        $ticket = Ticket::findOrFail($args['id']);
        $ticket->user_id = $args['input']['user_id'];
        $ticket->status = $args['input']['status'];
        $ticket->save();

        return $ticket;
    }
}