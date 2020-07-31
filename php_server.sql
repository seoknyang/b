delete from sv_doclist where DOC_NUM like 'num';
select * from sv_doclist;
commit;



SELECT MAX(TO_NUMBER(SUBSTR(DOC_NUM, 3)))+1 FROM sv_doclist;
SELECT TO_CHAR(MAX(TO_NUMBER(SUBSTR(DOC_NUM, 3)))+1) as getnum FROM sv_doclist;