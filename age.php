function calculateAge($dateOfBirth, $unit = 'years') {
  $today = new DateTime();
  $diff = $today->diff(new DateTime($dateOfBirth));
  
  switch ($unit) {
    case 'seconds':
      return $diff->s + $diff->i*60 + $diff->h*60*60 + $diff->days*24*60*60;
    case 'days':
      return $diff->days;
    case 'years':
    default:
      return $diff->y;
  }
}
