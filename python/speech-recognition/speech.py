import speech_recognition as sr
import pyttsx3

engine = pyttsx3.init('sapi5')
voices = engine.getProperty('voices')
engine.setProperty('voice', voices[0].id)


def speak(audio):
    engine.say(audio)
    engine.runAndWait()


r = sr.Recognizer()

with sr.Microphone() as source:
    speak("Hi this is Jarvis, as Edith said u can't have kanna")
    audio = r.listen(source)

    try:
        text = r.recognize_google(audio)
        print('You said : {}'.format(text))
    except:
        print("Sorry speech not recognised")
