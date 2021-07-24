SELECT pat.file_number AS 'Num. Exp', concat(pat.first_surname, ' ', pat.second_surname, ' ', pat.first_name) AS Nombre,
	ses.date, ttd.key, pat.curp
FROM patients AS pat
INNER JOIN consultation_sessions AS ses ON pat.id = ses.patient_id
INNER JOIN tariff_table_amounts AS tta ON tta.id = ses.tariff_table_amount_id
INNER JOIN tariff_table_descriptions AS ttd ON ttd.id = tta.tariff_table_description_id
WHERE ses.date >= '2021-01-01'