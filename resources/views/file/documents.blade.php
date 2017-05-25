@include('file.html2pdf');
@php
$pdf=new PDF_HTML();
$pdf->SetFont('Arial','',12);
$pdf->AddPage();
$no=1;
@endphp

@foreach($questions as $question)
@php ($html[] = "<br>".$no.". ".$question->question."<br>")
@php ($no++)
@endforeach

@php
$html_array = implode(" ",$html);
$pdf->WriteHTML($html_array);
ob_end_clean();
$pdf->Output();
exit;
@endphp
