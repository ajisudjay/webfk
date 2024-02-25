public function showFile()
{
$uri = current_url(true);
$total = $uri->getTotalSegments();

if ($uri->getSegment(2) == 'uploads') {
if (session()->get('username') == NULL) {
return redirect()->to('/home');
}
}

if ($total == 3) {
$segment2 = $uri->getSegment(2);
$segment3 = $uri->getSegment(3);
helper("filesystem");
$path = WRITEPATH . '' . $segment3 . '';
$file = new \CodeIgniter\Files\File($path, true);
$binary = readfile($path);
return $this->response
->setHeader('Content-Type', $file->getMimeType())
->setHeader('Content-disposition', 'inline; filename="' . $file->getBasename() . '"')
->setStatusCode(200)
->setBody($binary);
} else if ($total == 4) {
$segment2 = $uri->getSegment(2);
$segment3 = $uri->getSegment(3);
$segment4 = $uri->getSegment(4);
helper("filesystem");
$path = WRITEPATH . '' . $segment3 . '/' . $segment4 . '';
$file = new \CodeIgniter\Files\File($path, true);
$binary = readfile($path);
return $this->response
->setHeader('Content-Type', $file->getMimeType())
->setHeader('Content-disposition', 'inline; filename="' . $file->getBasename() . '"')
->setStatusCode(200)
->setBody($binary);
} else if ($total == 5) {
$segment2 = $uri->getSegment(2);
$segment3 = $uri->getSegment(3);
$segment4 = $uri->getSegment(4);
$segment5 = $uri->getSegment(5);
if ($segment2 == 'kjhasdlkjhlkjhasdkhadaskdhj') {
helper("filesystem");
$path = WRITEPATH . 'uploads/' . $segment3 . '/' . $segment4 . '/' . $segment5 . '';
$file = new \CodeIgniter\Files\File($path, true);
$binary = readfile($path);
return $this->response
->setHeader('Content-Type', $file->getMimeType())
->setHeader('Content-disposition', 'inline; filename="' . $file->getBasename() . '"')
->setStatusCode(200)
->setBody($binary);
} else {
helper("filesystem");
$path = WRITEPATH . '' . $segment3 . '/' . $segment4 . '/' . $segment5 . '';
$file = new \CodeIgniter\Files\File($path, true);
$binary = readfile($path);
return $this->response
->setHeader('Content-Type', $file->getMimeType())
->setHeader('Content-disposition', 'inline; filename="' . $file->getBasename() . '"')
->setStatusCode(200)
->setBody($binary);
}
} else if ($total == 6) {
$segment2 = $uri->getSegment(2);
$segment3 = $uri->getSegment(3);
$segment4 = $uri->getSegment(4);
$segment5 = $uri->getSegment(5);
$segment6 = $uri->getSegment(6);
helper("filesystem");
$path = WRITEPATH . '' . $segment3 . '/' . $segment4 . '/' . $segment5 . '/' . $segment6 . '';
// dd($path);
$file = new \CodeIgniter\Files\File($path, true);
$binary = readfile($path);
return $this->response
->setHeader('Content-Type', $file->getMimeType())
->setHeader('Content-disposition', 'inline; filename="' . $file->getBasename() . '"')
->setStatusCode(200)
->setBody($binary);
} else if ($total == 7) {
$segment2 = $uri->getSegment(2);
$segment3 = $uri->getSegment(3);
$segment4 = $uri->getSegment(4);
$segment5 = $uri->getSegment(5);
$segment6 = $uri->getSegment(6);
$segment7 = $uri->getSegment(7);
helper("filesystem");
$path = WRITEPATH . '' . $segment3 . '/' . $segment4 . '/' . $segment5 . '/' . $segment6 . '/' . $segment7 . '';
$file = new \CodeIgniter\Files\File($path, true);
$binary = readfile($path);
return $this->response
->setHeader('Content-Type', $file->getMimeType())
->setHeader('Content-disposition', 'inline; filename="' . $file->getBasename() . '"')
->setStatusCode(200)
->setBody($binary);
} else if ($total == 8) {
$segment2 = $uri->getSegment(2);
$segment3 = $uri->getSegment(3);
$segment4 = $uri->getSegment(4);
$segment5 = $uri->getSegment(5);
$segment6 = $uri->getSegment(6);
$segment7 = $uri->getSegment(7);
$segment8 = $uri->getSegment(8);
helper("filesystem");
$path = WRITEPATH . '' . $segment3 . '/' . $segment4 . '/' . $segment5 . '/' . $segment6 . '/' . $segment7 . '/' . $segment8 . '';
$file = new \CodeIgniter\Files\File($path, true);
$binary = readfile($path);
return $this->response
->setHeader('Content-Type', $file->getMimeType())
->setHeader('Content-disposition', 'inline; filename="' . $file->getBasename() . '"')
->setStatusCode(200)
->setBody($binary);
} else if ($total == 9) {
$segment2 = $uri->getSegment(2);
$segment3 = $uri->getSegment(3);
$segment4 = $uri->getSegment(4);
$segment5 = $uri->getSegment(5);
$segment6 = $uri->getSegment(6);
$segment7 = $uri->getSegment(7);
$segment8 = $uri->getSegment(8);
$segment9 = $uri->getSegment(9);
helper("filesystem");
$path = WRITEPATH . '' . $segment3 . '/' . $segment4 . '/' . $segment5 . '/' . $segment6 . '/' . $segment7 . '/' . $segment8 . '/' . $segment9 . '';
$file = new \CodeIgniter\Files\File($path, true);
$binary = readfile($path);
return $this->response
->setHeader('Content-Type', $file->getMimeType())
->setHeader('Content-disposition', 'inline; filename="' . $file->getBasename() . '"')
->setStatusCode(200)
->setBody($binary);
} else if ($total == 10) {
$segment2 = $uri->getSegment(2);
$segment3 = $uri->getSegment(3);
$segment4 = $uri->getSegment(4);
$segment5 = $uri->getSegment(5);
$segment6 = $uri->getSegment(6);
$segment7 = $uri->getSegment(7);
$segment8 = $uri->getSegment(8);
$segment9 = $uri->getSegment(9);
$segment10 = $uri->getSegment(10);
helper("filesystem");
$path = WRITEPATH . '' . $segment3 . '/' . $segment4 . '/' . $segment5 . '/' . $segment6 . '/' . $segment7 . '/' . $segment8 . '/' . $segment9 . '/' . $segment10 . '';
$file = new \CodeIgniter\Files\File($path, true);
$binary = readfile($path);
return $this->response
->setHeader('Content-Type', $file->getMimeType())
->setHeader('Content-disposition', 'inline; filename="' . $file->getBasename() . '"')
->setStatusCode(200)
->setBody($binary);
} else {
return redirect()->to('/home');
}
}