<?php 
namespace App\GraphQL\Queries;

use App\Models\Ticket;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class TicketsQuery extends Query
{
    protected $attributes = [
        'name' => 'tickets',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('Ticket'));
    }

    public function resolve($root, $args)
    {
        return Ticket::all();
    }
}