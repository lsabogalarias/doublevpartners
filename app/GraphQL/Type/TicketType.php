<?php
// app/GraphQL/Type/TicketType.php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class TicketType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Ticket',
        'description' => 'A ticket',
    ];


    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
            ],            
            'user_id' => [
                'type' => Type::nonNull(Type::int()),
            ],
            'create_date' => [
                'type' => Type::string(),
            ],
            'update_date' => [
                'type' => Type::string(),
            ],
            'status' => [
                'type' => Type::nonNull(Type::string()),
            ],
        ];
    }
}

?>