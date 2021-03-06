# Action|1
# Adventure|2
# Animation|3
# Children's|4
# Comedy|5
# Crime|6
# Documentary|7
# Drama|8
# Fantasy|9
# Film-Noir|10
# Horror|11
# Musical|12
# Mystery|13
# Romance|14
# Sci-Fi|15
# Thriller|16
# War|17
# Western|18

type_dict = {"Action": 0, "Adventure": 1, "Animation": 2, "Children's": 3, "Comedy": 4, "Crime": 5,
             "Documentary": 6, "Drama": 7, "Fantasy": 8, "Film-Noir": 9, "Horror": 10, "Musical": 11,
             "Mystery": 12, "Romance": 13, "Sci-Fi": 14, "Thriller": 15, "War": 16, "Western": 17}
movies = []
with open("ml-1m/movies.dat", 'r') as mv:
    line = mv.readline()
    while line != None and line != "":
        list = ["0"] * 18
        arr = line.strip().split("::")
        index, name, type = str(arr[0]), str(arr[1]), str(arr[2])
        types = type.split("|")
        for i in range(len(types)):
            j = type_dict[types[i]]
            list[j] = "1"
        newtype = ','.join(list)
        newline = index + '\t' + name + '\t' + newtype
        movies.append(newline)
        line = mv.readline()

with open("ml-1m/movies.data", 'w') as f:
    for i in range(len(movies)):
        f.write(movies[i])
        f.write('\n')
