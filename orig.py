import re


def link_generator(string, data):

    progress = []
    clean_data = cleaner(data)

    for key in clean_data.keys():

        values_list = clean_data.get(key)
        
        if progress:

            for value in values_list:

                progress_string = progress.pop(0)
                further_progress_string = re.sub(key, str(value), progress_string)
                progress.append(further_progress_string)

        else:

            for value in values_list:

                formated_string = re.sub(key, str(value), string)
                progress.append(formated_string)

    return progress


def cleaner(data):

    new_dict = {}
    counter = 0

    for key in data.keys():

        new_key = "\{" + str(counter) + "\}"
        item = data.get(key)
        new_dict.update({new_key: item})
        counter += 1
        
    return new_dict


def writer(links_list):

    with open("links.txt", "w", encoding="utf-8") as f:

        for link in links_list:

            f.write(link)
            f.write("\n")
            