delimiter $$
create trigger tr_points2 AFTER UPDATE ON Draws
for each row
begin
update Group_B set Points =  Points + 2 where Country=new.Win;
update Group_B set Win =  Win + 1 where Country=new.Win;
update Group_B set Lost =  Lost + 1 where Country=new.Lost;
update Group_B set Draw =  Draw + 1 where new.Win="TTT" and Country=new.Team_1;
update Group_B set Draw =  Draw + 1 where new.Lost="TTT" and Country=new.Team_2;
update Group_B set Points =  Points + 1 where new.Win="TTT" and Country=new.Team_1;
update Group_B set Points =  Points + 1 where new.Win="TTT" and Country=new.Team_2;
update Group_B set Total =  Total + 1 where Country=new.Team_1;
update Group_B set Total =  Total + 1 where Country=new.Team_2;
end $$

delimiter ;

