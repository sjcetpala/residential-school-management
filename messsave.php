SELECt count(*),`Status`,(datediff('2018-03-14','2018-03-13') - count(status))*150 bill from attendence group by `status`;

 select count(*),`Status`,(datediff('2018-03-13','2018-03-14') - count(*))*150 bill from attendence where date BETWEEN '2018-03-13' AND '2018-03-14'  group by `Status`;