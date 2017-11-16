def print_timetable(table,name):
	s = "   |   "
	d = 0
	for A in table:
		d += 1
		print (str(d)+")"+name[d-1]+"\n")
		print ("|-----|---------------------------------------------------------------------------------------------------------------------------------|")
		print ("|     |                                                              TIME                                                               |")
		print ("| DAY |---------------------------------------------------------------------------------------------------------------------------------|")
		print ("|     |08.30-09.30 |09.30-10.30 |10.30-11.30 |11.30-12.30 |12.30-13.30 |13.30-14.30 |14.30-15.30 |15.30-16.30 |16.30-17.30 |17.30-18.30 |")
		print ("|-----|------------|------------|------------|------------|------------|------------|------------|------------|------------|------------|")
		print ("| MON |   "+A[0][0]+s+A[0][1]+s+A[0][2]+s+A[0][3]+s+A[0][4]+s+A[0][5]+s+A[0][6]+s+A[0][7]+s+A[0][8]+s+A[0][9]+"   |")
		print ("|-----|------------|------------|------------|------------|------------|------------|------------|------------|------------|------------|")
		print ("| TUE |   "+A[1][0]+s+A[1][1]+s+A[1][2]+s+A[1][3]+s+A[1][4]+s+A[1][5]+s+A[1][6]+s+A[1][7]+s+A[1][8]+s+A[1][9]+"   |")
		print ("|-----|------------|------------|------------|------------|------------|------------|------------|------------|------------|------------|")
		print ("| WED |   "+A[2][0]+s+A[2][1]+s+A[2][2]+s+A[2][3]+s+A[2][4]+s+A[2][5]+s+A[2][6]+s+A[2][7]+s+A[2][8]+s+A[2][9]+"   |")
		print ("|-----|------------|------------|------------|------------|------------|------------|------------|------------|------------|------------|")
		print ("| THU |   "+A[3][0]+s+A[3][1]+s+A[3][2]+s+A[3][3]+s+A[3][4]+s+A[3][5]+s+A[3][6]+s+A[3][7]+s+A[3][8]+s+A[3][9]+"   |")
		print ("|-----|------------|------------|------------|------------|------------|------------|------------|------------|------------|------------|")
		print ("| FRI |   "+A[4][0]+s+A[4][1]+s+A[4][2]+s+A[4][3]+s+A[4][4]+s+A[4][5]+s+A[4][6]+s+A[4][7]+s+A[4][8]+s+A[4][9]+"   |")
		print ("|-----|------------|------------|------------|------------|------------|------------|------------|------------|------------|------------|")
		#print ("| SAT |   FRA141   |   FRA141   |   FRA141   |   FRA141   |   FRA141   |   FRA141   |   FRA141   |   FRA141   |   FRA141   |   FRA141   |")
		#print ("|-----|------------|------------|------------|------------|------------|------------|------------|------------|------------|------------|")
		print ("\n")
def sub_do_not_use_this_time(i,subject_description,teacher_name,timetable_teacher,room_code,
							timetable_room,MIX_SCHEDULE,timetable,subject_do_not_use_this_time = None):
	subject_do_not_use_this_time = []
	subject = subject_description[i]
	FREE = "      "
	#Check from teacher
	for a in range(len(teacher_name)):
		if subject[2] == teacher_name[a]:
			for o in range(5):
				for u in range(10):
					if timetable_teacher[a][o][u] != FREE:
						check = 0
						for e in subject_do_not_use_this_time:
							if e == timetable[o][u]:
								check = 1
						if check == 0:
							subject_do_not_use_this_time.append(timetable[o][u])
	
	#Check from MIX_SCHEDULE
	level = subject[1]
	if level == "1":
		A = MIX_SCHEDULE[0]
		B = MIX_SCHEDULE[1]
	elif level == "2":
		A = MIX_SCHEDULE[2]
		B = MIX_SCHEDULE[3]
	elif level == "3":
		A = MIX_SCHEDULE[4]
		B = MIX_SCHEDULE[5]
	elif level == "4":
		A = MIX_SCHEDULE[6]
		B = MIX_SCHEDULE[7]

	for o in range(5):
		for u in range(10):
			check = 0
			for e in subject_do_not_use_this_time:
				if e == timetable[o][u]:
					check = 1
			if check == 0:
				if subject[4] == "AB" and (A[o][u] != FREE or B[o][u] != FREE):
					subject_do_not_use_this_time.append(timetable[o][u])
				elif subject[4] == "AA" and A[o][u] != FREE:
					subject_do_not_use_this_time.append(timetable[o][u])
				elif subject[4] == "BB" and B[o][u] != FREE:
					subject_do_not_use_this_time.append(timetable[o][u])
	
	#Check from room_code
	for a in range(len(room_code)):
		if subject[5] == room_code[a]:
			for o in range(5):
				for u in range(10):
					if timetable_room[a][o][u] != FREE:
						check = 0
						for e in subject_do_not_use_this_time:
							if e == timetable[o][u]:
								check = 1
						if check == 0:
							subject_do_not_use_this_time.append(timetable[o][u])

	subject_do_not_use_this_time = sorted(subject_do_not_use_this_time)

	return (subject_do_not_use_this_time)

def manage_schedule(i,subject_description,teacher_name,timetable_teacher,room_code,
					timetable_room,MIX_SCHEDULE,timetable,subject_do_not_use_this_time = None):
	subject = subject_description[i]
	level = subject[1]
	sec  = subject[4]
	subject_do_not_use_this_time = []
	FREE = "      "
	day  = ["0","1","2","3","4"]
	hr   = ["0","1","2","3","4","5","6","7","8","9"]
	hr_1 = [["1"],["2"],["3"],["5"],["6"],["7"],["8"]]
	hr_2 = [["0","1"],["1","2"],["2","3"],["5","6"],["6","7"],["7","8"]]
	hr_3 = [["1","2","3"],["5","6","7"],["6","7","8"]]

	if level == "1":
		A = 0
		B = 1
	elif level == "2":
		A = 2
		B = 3
	elif level == "3":
		A = 4
		B = 5
	elif level == "4":
		A = 6
		B = 7

	#Update MIX_SCHEDULE
	if len(subject[3]) == 1:
		T = [subject[3]]
	else:
		T = subject[3].split("/")

	for t in range(len(T)):
		finish = 0
		while finish != 5:
			subject_do_not_use_this_time = sub_do_not_use_this_time(i,subject_description,teacher_name,timetable_teacher,room_code,
																	timetable_room,MIX_SCHEDULE,timetable,subject_do_not_use_this_time)
			FREE_TIME = [[],[],[],[],[]]
			print (str(t)+"_"+subject[0])
			#print (subject_do_not_use_this_time)
			for o in range(len(FREE_TIME)):
				for u in range(10):
					FREE_TIME[o].append(timetable[o][u])
			for a in range(len(FREE_TIME)):
				for b in range(len(FREE_TIME[a])):
					for c in subject_do_not_use_this_time:
						if c == FREE_TIME[a][b]:
							FREE_TIME[a][b] = "xx"

			FREE_TIME_SPRIT = [[],[],[],[],[]]
			FREE_TIME_GROUP = [[],[],[],[],[]]
			for o in range(len(FREE_TIME)):
				if T[t] == "1":
					for u in range(0,len(FREE_TIME[o])):
						split = []
						split.append(FREE_TIME[o][u][1])
						FREE_TIME_SPRIT[o].append(split)
					for u in range(len(FREE_TIME_SPRIT)):
						for v in FREE_TIME_SPRIT[u]:
							for w in hr_1:
								if v == w:
									check = 0
									for e in FREE_TIME_GROUP[u]:
										if e == v:
											check = 1
									if check == 0:
										FREE_TIME_GROUP[u].append(v)

				elif T[t] == "2":
					for u in range(0,len(FREE_TIME[o])-1):
						split = []
						split.append(FREE_TIME[o][u][1])
						split.append(FREE_TIME[o][u+1][1])
						FREE_TIME_SPRIT[o].append(split)
					for u in range(len(FREE_TIME_SPRIT)):
						for v in FREE_TIME_SPRIT[u]:
							for w in hr_2:
								if v == w:
									check = 0
									for e in FREE_TIME_GROUP[u]:
										if e == v:
											check = 1
									if check == 0:
										FREE_TIME_GROUP[u].append(v)

				elif T[t] == "3":
					for u in range(0,len(FREE_TIME[o])-2):
						split = []
						split.append(FREE_TIME[o][u][1])
						split.append(FREE_TIME[o][u+1][1])
						split.append(FREE_TIME[o][u+2][1])
						FREE_TIME_SPRIT[o].append(split)
					for u in range(len(FREE_TIME_SPRIT)):
						for v in FREE_TIME_SPRIT[u]:
							for w in hr_3:
								if v == w:
									check = 0
									for e in FREE_TIME_GROUP[u]:
										if e == v:
											check = 1
									if check == 0:
										FREE_TIME_GROUP[u].append(v)

			for a in range(len(FREE_TIME_GROUP)):
				for o in range(len(FREE_TIME_GROUP[a])):
					for u in range(len(FREE_TIME_GROUP[a][o])):
						FREE_TIME_GROUP[a][o][u] = str(a)+FREE_TIME_GROUP[a][o][u]

			#print (FREE_TIME_GROUP)
			num_day = []
			for z in range(len(FREE_TIME_GROUP)):
				if len(FREE_TIME_GROUP[z]) != 0:
					num_day.append(z)

			subject_time = []
			if len (num_day) != 0 and t == 0:
				subject_time = FREE_TIME_GROUP[num_day[0]][0]
			elif len (num_day) != 0 and t == 1:
				subject_time = FREE_TIME_GROUP[num_day[len(num_day)-1]][0]
			else:
				pass

			#print (subject_time)
			if subject_time != []:
				for x in subject_time:
					subject_description[i][6].append(x)

				for a in subject_time:
					o = int(a[0])
					u = int(a[1])
					#Update timetable_room
					if sec == "AB":
						MIX_SCHEDULE[A][o][u] = subject[0]
						MIX_SCHEDULE[B][o][u] = subject[0]
					elif sec == "AA":
						MIX_SCHEDULE[A][o][u] = subject[0]
					elif sec == "BB":
						MIX_SCHEDULE[B][o][u] = subject[0]
					#Update timetable_teacher
					if finish == 1 or finish == 3:
						for a in range(len(teacher_name)):
							if subject[2] == teacher_name[a]:
								for e in case1:
									x = int(e[0])
									y = int(e[1])
									timetable_teacher[a][x][y] = "_BUSY_"
					for e in range(len(teacher_name)):
						if subject[2] == teacher_name[e]:
							timetable_teacher[e][o][u] = subject[0]
					#Update timetable_room
					for e in range(len(room_code)):
						if subject[5] == room_code[e]:
							timetable_room[e][o][u] = subject[0]
					finish = 5
			else:
				if finish == 0:
					print ("case 1")
					case1 = []
					for a in range(len(teacher_name)):
						if subject[2] == teacher_name[a]:
							for o in range(5):
								for u in range(10):
									if timetable_teacher[a][o][u] == "_BUSY_":
										timetable_teacher[a][o][u] = FREE
										case1.append(timetable[o][u])
				
				elif finish == 1 :
					print ("case 2")
					hr_1.append(["0"])
					hr_2.append(["8","9"])
					hr_3.append(["0","1","2"])
					hr_3.append(["7","8","9"])
				
				elif finish == 2:
					print ("case 3")
					for a in range(len(teacher_name)):
						if subject[2] == teacher_name[a]:
							for e in case1:
								x = int(e[0])
								y = int(e[1])
								timetable_teacher[a][x][y] = FREE
				finish += 1

	return ([MIX_SCHEDULE,subject_description,timetable_teacher,timetable_room])

def schedule(data):
	
	#extract data
	teacher_name = data[0]
	teacher_busy = data[1]
	subject_description = data[2]
	center_subject = data[3]
	room_code = data[4]
	FREE = "      "

	for i in range(len(subject_description)):
		subject_description[i].append([])

	timetable = [["00","01","02","03","04","05","06","07","08","09"],
				["10","11","12","13","14","15","16","17","18","19"],
				["20","21","22","23","24","25","26","27","28","29"],
				["30","31","32","33","34","35","36","37","38","39"],
				["40","41","42","43","44","45","46","47","48","49"]]

	#Update timetable_teacher
	timetable_teacher = [[[FREE] * 10 for i in range(5)]for i in range(len(teacher_busy))]
	for a in range(len(teacher_busy)):
		for e in teacher_busy[a]:
			for i in range(5):
				for o in range(10):
					if e == timetable[i][o]:
						timetable_teacher[a][i][o] = "_BUSY_"
						
	timetable_room = [[[FREE] * 10 for i in range(5)]for i in range(len(room_code))]
	
	#subject_do_not_use_this_time = [[]for i in range(len(subject_description))]

	MIX_SCHEDULE_KEY = ["1_secA","1_secB","2_secA","2_secB","3_secA","3_secB","4_secA","4_secB"]
	MIX_SCHEDULE = [[[FREE] * 10 for i in range(5)]for i in range(8)]
	
	#Update MIX_SCHEDULE with MONDAY_PM
	for i in range(len(MIX_SCHEDULE)):
		for o in (5,6,7,8,9):
			MIX_SCHEDULE[i][0][o] = "_FULL_"

	#Update MIX_SCHEDULE with CENTER_SUBJECT
	for i in range(len(center_subject)):
		center_sub_level = center_subject[i][1]
		center_sub_sec = center_subject[i][2]
		for a in center_subject[i][3]:
			o = int(a[0])
			u = int(a[1])
			if center_sub_level == "1":
				if center_sub_sec == "AB":
					MIX_SCHEDULE[0][o][u] = center_subject[i][0]
					MIX_SCHEDULE[1][o][u] = center_subject[i][0]
				elif center_sub_sec == "AA":
					MIX_SCHEDULE[0][o][u] = center_subject[i][0]
				elif center_sub_sec == "BB":
					MIX_SCHEDULE[1][o][u] = center_subject[i][0]
			
			elif center_sub_level == "2":
				if center_sub_sec == "AB":
					MIX_SCHEDULE[2][o][u] = center_subject[i][0]
					MIX_SCHEDULE[3][o][u] = center_subject[i][0]
				elif center_sub_sec == "AA":
					MIX_SCHEDULE[2][o][u] = center_subject[i][0]
				elif center_sub_sec == "BB":
					MIX_SCHEDULE[3][o][u] = center_subject[i][0]

			elif center_sub_level == "3":
				if center_sub_sec == "AB":
					MIX_SCHEDULE[4][o][u] = center_subject[i][0]
					MIX_SCHEDULE[5][o][u] = center_subject[i][0]
				elif center_sub_sec == "AA":
					MIX_SCHEDULE[4][o][u] = center_subject[i][0]
				elif center_sub_sec == "BB":
					MIX_SCHEDULE[5][o][u] = center_subject[i][0]

			elif center_sub_level == "4":
				if center_sub_sec == "AB":
					MIX_SCHEDULE[6][o][u] = center_subject[i][0]
					MIX_SCHEDULE[7][o][u] = center_subject[i][0]
				elif center_sub_sec == "AA":
					MIX_SCHEDULE[6][o][u] = center_subject[i][0]
				elif center_sub_sec == "BB":
					MIX_SCHEDULE[7][o][u] = center_subject[i][0]

	#find posititon of priority_room
	priority_room = ["FB306","FB401","FB402","FB403-4"]
	priority_room_num = [99,99,99,99]
	for i in range(len(room_code)):
		if room_code[i] == priority_room[0]:
			priority_room_num[0] = i
		elif room_code[i] == priority_room[1]:
			priority_room_num[1] = i
		elif room_code[i] == priority_room[2]:
			priority_room_num[2] = i
		elif room_code[i] == priority_room[3]:
			priority_room_num[3] = i
	
	#sort subject position by priority_room
	AB_sub = []
	AA_BB_sub = []

	FB306_AA_BB_sub = []
	FB401_AA_BB_sub = []
	FB402_AA_BB_sub = []
	FB403_4_AA_BB_sub = []
	ANOTHER_ROOM_AA_BB_sub = []

	FB306_AB_sub = []
	FB401_AB_sub = []
	FB402_AB_sub = []
	FB403_4_AB_sub = []
	ANOTHER_ROOM_AB_sub = []

	for i in range(len(subject_description)):
		if subject_description[i][4] == "AB":
			AB_sub.append(i)
		else :
			AA_BB_sub.append(i)	

	for i in AA_BB_sub:
		if subject_description[i][5] == "FB306":
			FB306_AA_BB_sub.append(i)
		elif subject_description[i][5] == "FB401":
			FB401_AA_BB_sub.append(i)
		elif subject_description[i][5] == "FB402":
			FB402_AA_BB_sub.append(i)
		elif subject_description[i][5] == "FB403-4":
			FB403_4_AA_BB_sub.append(i)
		else :
			ANOTHER_ROOM_AA_BB_sub.append(i)
	for i in AB_sub:
		if subject_description[i][5] == "FB306":
			FB306_AB_sub.append(i)
		elif subject_description[i][5] == "FB401":
			FB401_AB_sub.append(i)
		elif subject_description[i][5] == "FB402":
			FB402_AB_sub.append(i)
		elif subject_description[i][5] == "FB403-4":
			FB403_4_AB_sub.append(i)
		else :
			ANOTHER_ROOM_AB_sub.append(i)

	#manage schedule
	for i in FB306_AA_BB_sub:
		manage = manage_schedule(i,subject_description,teacher_name,timetable_teacher,room_code,
								timetable_room,MIX_SCHEDULE,timetable)
		MIX_SCHEDULE = manage[0]
		subject_description = manage[1]
		timetable_teacher = manage[2]
		timetable_room = manage[3]

	for i in FB306_AB_sub:
		manage = manage_schedule(i,subject_description,teacher_name,timetable_teacher,room_code,
								timetable_room,MIX_SCHEDULE,timetable)
		MIX_SCHEDULE = manage[0]
		subject_description = manage[1]
		timetable_teacher = manage[2]
		timetable_room = manage[3]

	for i in FB401_AA_BB_sub:
		manage = manage_schedule(i,subject_description,teacher_name,timetable_teacher,room_code,
								timetable_room,MIX_SCHEDULE,timetable)
		MIX_SCHEDULE = manage[0]
		subject_description = manage[1]
		timetable_teacher = manage[2]
		timetable_room = manage[3]

	for i in FB401_AB_sub:
		manage = manage_schedule(i,subject_description,teacher_name,timetable_teacher,room_code,
								timetable_room,MIX_SCHEDULE,timetable)
		MIX_SCHEDULE = manage[0]
		subject_description = manage[1]
		timetable_teacher = manage[2]
		timetable_room = manage[3]

	for i in FB402_AA_BB_sub:
		manage = manage_schedule(i,subject_description,teacher_name,timetable_teacher,room_code,
								timetable_room,MIX_SCHEDULE,timetable)
		MIX_SCHEDULE = manage[0]
		subject_description = manage[1]
		timetable_teacher = manage[2]
		timetable_room = manage[3]

	for i in FB402_AB_sub:
		manage = manage_schedule(i,subject_description,teacher_name,timetable_teacher,room_code,
								timetable_room,MIX_SCHEDULE,timetable)
		MIX_SCHEDULE = manage[0]
		subject_description = manage[1]
		timetable_teacher = manage[2]
		timetable_room = manage[3]

	for i in FB403_4_AA_BB_sub:
		manage = manage_schedule(i,subject_description,teacher_name,timetable_teacher,room_code,
								timetable_room,MIX_SCHEDULE,timetable)
		MIX_SCHEDULE = manage[0]
		subject_description = manage[1]
		timetable_teacher = manage[2]
		timetable_room = manage[3]

	for i in FB403_4_AB_sub:
		manage = manage_schedule(i,subject_description,teacher_name,timetable_teacher,room_code,
								timetable_room,MIX_SCHEDULE,timetable)
		MIX_SCHEDULE = manage[0]
		subject_description = manage[1]
		timetable_teacher = manage[2]
		timetable_room = manage[3]

	for i in ANOTHER_ROOM_AA_BB_sub:
		manage = manage_schedule(i,subject_description,teacher_name,timetable_teacher,room_code,
								timetable_room,MIX_SCHEDULE,timetable)
		MIX_SCHEDULE = manage[0]
		subject_description = manage[1]
		timetable_teacher = manage[2]
		timetable_room = manage[3]

	for i in ANOTHER_ROOM_AB_sub:
		manage = manage_schedule(i,subject_description,teacher_name,timetable_teacher,room_code,
								timetable_room,MIX_SCHEDULE,timetable)
		MIX_SCHEDULE = manage[0]
		subject_description = manage[1]
		timetable_teacher = manage[2]
		timetable_room = manage[3]

	#show schedule
	print_timetable(MIX_SCHEDULE,MIX_SCHEDULE_KEY)
	#print_timetable(timetable_teacher,teacher_name)
	#print_timetable(timetable_room,room_code)
	for i in subject_description:
		print (i)


schedule(
		[#teacher_name = data[0]
		["Assoc. Prof. Dr.Siam Charoenseang",
		"Asst. Prof. Dr.Thavida Maneewarn",
		"Mr.Bawornsak Sakulkueakulsuk",
		"Dr.Pitiwut Teerakittikul",
		"Mr.Thanacha Choopojcharoen",
		"Asst.Prof.Dr.Eakkachai Pengwang",
		"Dr.Arbtip Dheeravongkit",
		"Dr.Supachai Vongbunyong",
		"Dr.Prakarnkiat Youngkong",
		"Mr.Worawit Panpanytep",
		"Dr.Warasinee Chaisangmongkon",
		"Dr.Orapadee Joochim",
		"Dr.Suriya Natsupakpong",
		"Dr.Boontariga Kasemsontitum",
		"Mr.Narongsak",
		"Dr.Pornpoj",
		"Ms.Mirawee Kumpakure",
		"Dr.Arbtip Dheeravongkit"
		],
		
		#teacher_busy = data[1]
		[
		["""00","01","02"""],
		["00","34","35","36"],
		["41","42","43","44","45"],
		["40","41","42","43","44"],
		["41","42","43","44"],
		["01","02","03"],
		["45","46","47","48"],
		["20","21","22","23"],
		["10","11","12"],
		["30","31","32","33"],
		["00","01","02","03","04"],
		["21","34","35","36"],
		["21","34","35","36"],
		["47","48","49"],
		["37","38","39","40","41","42"],
		["10","11","12","13"],
		["05","06","07","08"],
		["27","28","29"]
		],
		
		
		#subject_description = data[2]
		[
		["FRA141","1","Dr.Warasinee Chaisangmongkon",      "2/2","AA","FB306"],
		["FRA141","1","Mr.Bawornsak Sakulkueakulsuk",      "2/2","BB","FB306"],
		["FRA161","1","Dr.Prakarnkiat Youngkong",          "3/1","AA","FB403-4"],
		["FRA161","1","Asst.Prof.Dr.Eakkachai Pengwang",   "3/1","BB","FB301"],
		["FRA221","2","Dr.Pitiwut Teerakittikul",          "3","AA","FB306"],
		["FRA221","2","Dr.Pitiwut Teerakittikul",          "3","BB","FB306"],
		["FRA222","2","Asst. Prof. Dr.Thavida Maneewarn",  "3","AA","FB301"],
		["FRA222","2","Asst. Prof. Dr.Thavida Maneewarn",  "3","BB","FB301"],
		["FRA231","2","Asst.Prof.Dr.Eakkachai Pengwang",   "3","AB","FB403-4"],
		["FRA241","2","Mr.Bawornsak Sakulkueakulsuk",      "3","AB","FB401"],
		["FRA261","2","Dr.Pitiwut Teerakittikul",          "3","AA","FB306"],
		["FRA261","2","Dr.Pitiwut Teerakittikul",          "3","BB","FB306"],
		["FRA321","3","Dr.Suriya Natsupakpong",            "3","AA","FB304"],
		["FRA321","3","Mr.Worawit Panpanytep",             "3","BB","FB304"],
		["FRA331","3","Mr.Thanacha Choopojcharoen",        "3","AA","FB304"],
		["FRA331","3","Mr.Thanacha Choopojcharoen",        "3","BB","FB305"],
		["FRA332","3","Dr.Arbtip Dheeravongkit",           "3","AA","FB305"],
		["FRA332","3","Asst.Prof.Dr.Eakkachai Pengwang",   "3","BB","FB305"],
		["FRA341","3","Dr.Pornpoj",                        "3","AA","FB301"],
		["FRA341","3","Dr.Pornpoj",                        "3","BB","FB301"],
		["FRA361","3","Mr.Narongsak",                      "3","AB","FB401"],
		["FRA451","4","Dr.Boontariga Kasemsontitum",       "3","AB","FB306"],
		["FRA452","4","Dr.Supachai Vongbunyong",           "3","AB","FB305"]
		],
		
		#center_subject = data[3]
		[
		["GEN101","1","AB",["27","28"]],
		["LNG101","1","AB",["41","42","43"]],
		["MTH101","1","AB",["22","23","45","46"]],
		["PHY103","1","AA",["10","11","47"]],
		["PHY103","1","BB",["00","01","48"]],
		["PHY191","1","AB",["02","03"]],
		["LNG1-2","1","AB",["41","42","43"]],
		["LNG2-3","2","AB",["30","31","32"]],
		["MTH201","2","AB",["25","26","27","47"]],
		["LNG103","3","AB",["31","32","33"]]
		],

		#room = data[4]
		[
		"FB301",
		"FB304",
		"FB305",
		"FB306",
		"FB401",
		"FB402",
		"FB403-4"
		]
		]
		)
