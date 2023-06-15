<?php
use App\GraphQL\Queries\TicketQuery;
use App\GraphQL\Queries\TicketsQuery;
use App\GraphQL\Mutations\CreateTicketMutation;
use App\GraphQL\Mutations\UpdateTicketMutation;
use App\GraphQL\Mutations\DeleteTicketMutation;
use App\GraphQL\Type\TicketType; // Import the TicketType

public function boot()
{   
    // Register the TicketQuery
    $this->app['config']->set('graphql.schemas.default.query', [
        'ticket' => TicketQuery::class,
        'tickets' => TicketsQuery::class,
    ]);

   
    // Register the TicketType
    $this->app['config']->set('graphql.types', [
        'Ticket' => TicketType::class,
    ]);

    // Register the TicketMutation
    $this->app['config']->set('graphql.schemas.default.mutation', [
        'createTicket' => CreateTicketMutation::class,
        'updateTicket' => UpdateTicketMutation::class,
        'deleteTicket' => DeleteTicketMutation::class,
    ]);
}


?>