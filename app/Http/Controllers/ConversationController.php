<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConversationController extends Controller
{
    /**
     * Create a new conversation.
     */
    public function store(Request $request)
    {
        // Ensure the user is authenticated
        $auth = auth()->user();

        // Validate the recipient user ID and optional message
        $validated = $request->validate([
            'recipient_id' => 'required|exists:users,id', // Ensure recipient exists
            'message' => 'nullable|string|max:1000', // Optional message
        ]);

        // Find the recipient
        $recipient = \App\Models\User::find($validated['recipient_id']);

        // Create the conversation
        $conversation = $auth->createConversationWith($recipient, $validated['message'] ?? null);

        // Return a success response
        return response()->json([
            'message' => 'Conversation created successfully!',
            'conversation' => $conversation,
        ]);
    }
}

