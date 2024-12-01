<?php
class PHP_Email_Form {
  public $to = '';
  public $from_name = '';
  public $from_email = '';
  public $subject = '';
  public $messages = [];
  public $smtp = [];
  public $ajax = false;

  public function add_message($message, $label, $min_length = 0) {
    if (strlen($message) >= $min_length) {
      $this->messages[] = ['label' => $label, 'message' => $message];
    }
  }

  public function send() {
    $email_content = '';
    foreach ($this->messages as $msg) {
      $email_content .= $msg['label'] . ": " . $msg['message'] . "\n";
    }

    $headers = "From: " . $this->from_name . " <" . $this->from_email . ">\r\n";
    if (mail($this->to, $this->subject, $email_content, $headers)) {
      return json_encode(['status' => 'success', 'message' => 'Email sent successfully!']);
    } else {
      return json_encode(['status' => 'error', 'message' => 'Failed to send email.']);
    }
  }
}
?>
