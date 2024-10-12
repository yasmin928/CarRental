<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    // Function to get unread messages count
    public function getUnreadCount()
    {
        return Contact::where('is_read', false)->count(); 
    }

    // Display all messages
    public function index()
{
    // Fetch all messages from the database
    $messages = Contact::all();

    // Get the unread message count
    $unreadCount = $this->getUnreadCount();

    // Pass the messages and unread count to the view
    return view('admin.messages', compact('messages', 'unreadCount'));
}
    // Show a single message in detail 
    
    public function show($id)
{
    $message = Contact::findOrFail($id);
    return view('admin.showMessage', compact('message'));
}

    // Delete a message
    public function destroy($id)
    {
        // Find the message and delete it
    $message = Contact::findOrFail($id);
    $message->delete();

    return redirect()->route('admin.messages.index')->with('success', 'Message deleted successfully');
    }

    
}
