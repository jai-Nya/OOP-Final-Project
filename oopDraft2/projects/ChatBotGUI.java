import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import javax.swing.*;

public class ChatBotGUI {

    private static JTextArea chatArea; // Area to display chat conversation
    private static JTextField userInputField; // Input field for the user to type their message
    private static JButton sendButton; // Button to send the message

    public static void main(String[] args) {
        // Create the frame
        JFrame frame = new JFrame("ChatBot");
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

        // Set fixed size for the frame
        frame.setSize(400, 500);

        // Disable window resizing
        frame.setResizable(false);

        // Center the frame on the screen
        frame.setLocationRelativeTo(null);

        // Set layout for the frame
        frame.setLayout(new BorderLayout());

        // Create the chat area (for displaying conversation)
        chatArea = new JTextArea();
        chatArea.setEditable(false); // Make chat area non-editable
        chatArea.setLineWrap(true); // Wrap text to next line
        chatArea.setWrapStyleWord(true);
        chatArea.setFont(new Font("Montserrat", Font.PLAIN, 25));

        // Add a scroll pane to the chat area
        JScrollPane scrollPane = new JScrollPane(chatArea);
        frame.add(scrollPane, BorderLayout.CENTER);

        // Create the input panel (for user input)
        JPanel inputPanel = new JPanel();
        inputPanel.setLayout(new BorderLayout());

        // Create the input field
        userInputField = new JTextField();
        userInputField.setFont(new Font("Arial", Font.PLAIN, 25));

        inputPanel.add(userInputField, BorderLayout.CENTER);

        // Create the send button
        sendButton = new JButton("Send");
        inputPanel.add(sendButton, BorderLayout.EAST);

        // Add input panel to the frame
        frame.add(inputPanel, BorderLayout.SOUTH);

        // Initial greeting message
        chatArea.append("Hello! I'm your friendly chatbot. How can I help you today?\n");

        // Add button action listener to handle user input
        sendButton.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                // Get user input
                String userInput = userInputField.getText();

                // If user input is not empty
                if (!userInput.trim().isEmpty()) {
                    // Display user input in chat area
                    chatArea.append("You: " + userInput + "\n");

                    // Respond to user
                    String response = getChatBotResponse(userInput);
                    chatArea.append("Bot: " + response + "\n");

                    // Clear the input field
                    userInputField.setText("");

                    // Scroll to the bottom of the chat
                    chatArea.setCaretPosition(chatArea.getDocument().getLength());
                }
            }
        });

        // Display the frame
        frame.setVisible(true);
    }

    // Simple method to return bot's responses
    // Simple method to return bot's responses
    private static String getChatBotResponse(String input) {
        if (input.toLowerCase().contains("hello") || input.toLowerCase().contains("hi")) {
            return "Hi there! How can I assist you today?";
        } else if (input.toLowerCase().contains("bye")) {
            return "Goodbye! Have a great day!";
        } else if (input.toLowerCase().contains("what are you?")) {
            return "I am Chatbot! Nice to meet you";
        } else if (input.toLowerCase().contains("who created you?")) {
            return "My creator's name is Jair Dave Molavizar";
        } else if (input.toLowerCase().contains("when were you created?")) {
            return "I was created... uh... I dont remember when";
        } else {
            return "I'm not sure how to respond to that. Can you ask something else?";
        }
    }
}