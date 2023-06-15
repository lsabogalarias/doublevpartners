<?php
namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\InputType;

class TicketInputType extends InputType
{
    protected $attributes = [
        'name' => 'TicketInput',
        'description' => 'Input type for creating or updating a ticket',
    ];
    
    public function fields(): array
    {
        return [
            'user_id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The ID of the user associated with the ticket',
            ],
            'status' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The status of the ticket',
            ],
        ];
    }
}