
from abc import ABC, abstractmethod


class ICourse(ABC):

    @property
    @abstractmethod
    def name(self):
        raise NotImplemented

    @property
    @abstractmethod
    def teacher(self):
        raise NotImplemented

    @property
    @abstractmethod
    def topics(self):
        raise NotImplemented

    @name.setter
    @abstractmethod
    def name(self, name):
        raise NotImplemented

    @teacher.setter
    @abstractmethod
    def teacher(self, teacher):
        raise NotImplemented

    @topics.setter
    @abstractmethod
    def topics(self, topics):
        raise NotImplemented

    @abstractmethod
    def add_topic(self, topic):
        raise NotImplemented

    @abstractmethod
    def __str__(self):
        raise NotImplemented

    @abstractmethod
    def __init__(self, name, teacher, *args):
        raise NotImplemented


class ITeacher(ABC):

    @property
    @abstractmethod
    def name(self):
        raise NotImplemented

    @property
    @abstractmethod
    def courses(self):
        raise NotImplemented

    @name.setter
    @abstractmethod
    def name(self, name):
        raise NotImplemented

    @courses.setter
    @abstractmethod
    def courses(self, courses):
        raise NotImplemented

    @abstractmethod
    def add_course(self, course):
        raise NotImplemented

    @abstractmethod
    def __str__(self):
        raise NotImplemented


class ILocalCourse(ABC):

    @abstractmethod
    def __str__(self):
        raise NotImplemented

    @abstractmethod
    def __init__(self, name, teacher, *args):
        raise NotImplemented


class IOffsiteCourse(ICourse):

    @abstractmethod
    def __str__(self):
        raise NotImplemented

    @abstractmethod
    def __init__(self, name, teacher, *args):
        raise NotImplemented


class ICourseFactory(ABC):

    @abstractmethod
    def __init__(self):
        raise NotImplemented

    @abstractmethod
    def create_course(self, place, name, teacher, *args):
        raise NotImplemented


class ITeacherFactory(ABC):

    @abstractmethod
    def __init__(self):
        raise NotImplemented

    @abstractmethod
    def create_teacher(self, name, courses):
        raise TypeError


class Teacher(ITeacher):
    def __init__(self, name: str, courses=[]):
        self.name = name
        self.courses = courses

    @property
    def name(self):
        return self.__name

    @property
    def courses(self):
        return self.__courses

    @name.setter
    def name(self, name: str):
        if not isinstance(name, str):
            raise TypeError("name must be a string")
        if name and name.strip():
            self.__name = name
        else:
            raise TypeError("name teacher is empty")

    @courses.setter
    def courses(self, courses):
        if not isinstance(courses, list):
            raise TypeError("courses must be list type")
        if any(not isinstance(course, Course) for course in courses):
            raise TypeError("not course type")
        self.__courses = courses

    def add_course(self, course):
        if not isinstance(course, Course):
            raise TypeError("not course type")
        self.__courses.append(course)

    def __str__(self):
        return f"Teacher: {self.name}"


class Course(ICourse):
    def __init__(self, name, teacher, *args):
        self.name = name
        self.teacher = teacher
        self.topics = args

    @property
    def name(self):
        return self.__name

    @property
    def teacher(self):
        return self.__teacher

    @property
    def topics(self):
        return self.__topics

    @name.setter
    def name(self, name: str):
        if not isinstance(name, str):
            raise TypeError("name must be str")
        self.__name = name

    @teacher.setter
    def teacher(self, teacher):
        if not isinstance(teacher, Teacher):
            raise TypeError("teacher is not Teacher object")
        self.__teacher = teacher

    @topics.setter
    def topics(self, topics):
        if any(not isinstance(topic, str) for topic in topics):
            raise TypeError("topic must be srt type")
        self.__topics = topics

    def add_topic(self, topic):
        if not isinstance(topic, str):
            raise TypeError("topic must be str type")
        self.__topics.append(topic)

    def __str__(self):
        return f"Course ->  Name: {self.name}, teacher: {self.teacher}, topics: {self.topics}."


class LocalCourse(Course, ILocalCourse):
    def __init__(self, name, teacher, *args):
        super().__init__(name, teacher, *args)

    def __str__(self):
        return f"Local course ->  Name: {self.name}, teacher: {self.teacher}, topics: {self.topics}."


class OffsiteCourse(Course, IOffsiteCourse):
    def __init__(self, name, teacher, *args):
        super().__init__(name, teacher, *args)

    def __str__(self):
        return f"Offsite course ->  Name: {self.name}, teacher: {self.teacher}, topics: {self.topics}."


class TeacherFactory(ITeacherFactory):
    def __init__(self):
        pass

    def create_teacher(self, name, *courses):
        teacher = Teacher(name, *courses)
        return teacher


class CourseFactory(ICourseFactory):
    def __init__(self):
        pass

    def create_course(self, place, name, teacher, *args):
        if place == "local":
            course = LocalCourse(name, teacher, *args)
        elif place == "offsite":
            course = OffsiteCourse(name, teacher, *args)
        else:
            raise ValueError("Place incorrect")
        return course


if __name__ == '__main__':

    teacherFactory = TeacherFactory()
    teacher = teacherFactory.create_teacher("Artem")

    courseFactory = CourseFactory()
    cource = courseFactory.create_course("local", "computerCourse", teacher, "Monitor", "Mouse")
    teacher.add_course(cource)
    print(cource)
